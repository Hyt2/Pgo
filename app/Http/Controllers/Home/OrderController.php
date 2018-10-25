<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

class OrderController extends CommonController
{

    protected $model = 'Order';


    // 点击购买商品生成订单并且跳转到订单主页
    public function buy(Request $request) 
    {
        // 如果接收到了结算购物车指令
        if ($request->post('is_cart') == 'ok') {
            $uid = session('UserInfo.uid');
            if (!empty($_SESSION['cart-' . $uid])) {

                $carts = $_SESSION["cart-$uid"];

                foreach ($carts as $goodsId => $cart) {
                    $oid   = rand(100000000, 999999999);
                    // 当前商品的记录
                    // $goods = model('Goods')::find($goodsId);
                    $res   = model('Order')::insert([
                        'oid'         => $oid, // 生成9位的订单号
                        'cnts'        => $cart['cnt'], // 总数量
                        'sum'         => $cart['price'], // 总价
                        'user_id'     => $uid, // 下单用户
                        'create_time' => time(), // 下单时间
                    ]);

                    $res = model('OrderDetail')->insert([
                        'orders_id' => $oid,
                        'goods_id'  => $goodsId,
                        'price'     => $cart['price'],
                        'cnt'       => $cart['cnt'],
                    ]);
                }

                unset($_SESSION['cart-' . $uid]);
                
                return 1;
            }

            return 0;
        }


        $cnt = $request->post('cnt');

        if (!session('UserInfo')) {
            return 0;
        }

        $oid   = rand(100000000, 999999999);
        // 当前商品的记录
        //$goods = model('Goods')::find($request->post('goods_id'));
        $goods = model('Goods')::find($request->post('goods_id'));
        $res   = model('Order')::insert([
            'oid'         => $oid, // 生成9位的订单号
            'cnts'        => $cnt, // 总数量
            'sum'         => ($goods->shop_price * $cnt), // 总价
            'user_id'     => session('UserInfo.uid'), // 下单用户
            'create_time' => time(), // 下单时间
        ]);


        $res = model('OrderDetail')->insert([
            'orders_id' => $oid,
            'goods_id'  => $goods->id,
            'price'     => ($goods->shop_price * $cnt),
            'cnt'       => $cnt,
        ]);

        if ($res) {
            // 下单成功
            return 1;
        }

    }


    public function changeAddr() 
    {
        
        $info = model('Order')->where('user_id', session('UserInfo.uid'))->select('rec', 'addr', 'tel')->first();
        return view('home.order.addr', compact('info'));
    }


    public function doChangeAddr(Request $request)
    {
        $data = $request->except('_token');

        $rules = [
            'rec'  => "required",
            'tel'  => 'required',
            'addr' => 'required',
        ];

        $message = [
            'rec.required'  => '收货人不能为空!  ',
            'tel.required'  => '联系电话不能为空!',
            'addr.required' => '收货地址不能为空!',
        ];

        $validate = validate($data, $rules, $message);
        if (is_object($validate)) {
            return msg($validate);
        }


        if (model('Order')->where('user_id', session('UserInfo.uid'))->update($data)) {
            return msg('更新收货信息完成!', 'order');
        }

        return msg('页面超时,请稍后再试!');
    }


    // 订单前台主页
    public function index($sta = 'all') 
    {

        if(!session('UserInfo')) {
            return msg('你还未登录,请先登录!', 'login');
        }
        $sym = '=';
        if ($sta == 'waitPay') { // 待付款
            $status = 1;
        } else if ($sta == 'waitReceive') { // 待收货
            $status = 2;
        } else if($sta == 'all') {
            $status = 4;
            $sym = '!=';
        }

        $uid = session('UserInfo.uid');
        $orderInfo = model('Order')->join('order_detail', 'order_detail.orders_id' , '=', 'orders.oid')->leftJoin('goods', 'order_detail.goods_id', '=', 'goods.id')->select('orders.*', 'order_detail.goods_id', 'order_detail.price', 'goods.id', 'goods.goods_name', 'goods.goods_img')->where('user_id', $uid)->where('status', $sym, $status)->paginate(3);


        // 待付款的数量
        $count[] = model($this->model)->select(\DB::raw('count(*)'))->where('user_id', $uid)->where('status', 1)->first()->toArray()['count(*)'];
        // 待收货的数量
        $count[] = model($this->model)->select(\DB::raw('count(*)'))->where('user_id', $uid)->where('status', 2)->first()->toArray()['count(*)'];
        $goods = \DB::select('SELECT *,RAND() as r FROM `goods` ORDER BY r LIMIT 0,5');
        return view('home.order.order', compact('orderInfo', 'count', 'goods'));
    }


    // 付款
    public function payment($id, $sta, Request $request) 
    {

        $model = model($this->model);
        $order = $model->find($id);

        if ($sta != 4 && empty($order->tel) && empty($order->addr) && empty($order->rec)) {
            return msg('你的收货信息没有完善,请先完美收货信息!', 'order/change_addr');
        }

        if ($sta == 2) { // 付款
            $res = $model->where('oid', $id)->update(['status' => 2]);
            if ($res) {
                return msg('付款成功!', 'order');
            }
            return msg('付款超时,请稍后重试!');
        } else if($sta == 4) { // 取消订单
            $res = $model->where('oid', $id)->update(['status' => 4]);
            if ($res) {
                return msg('取消订单成功!', 'order');
            }
            return msg('取消订单超时,请稍后重试!');
        } else if($sta == 3) { // 确认收货 
            $res = $model->where('oid', $id)->update(['status' => 3]);
            if ($res) {
                return msg('收货完成,亲觉得不错记得给五星好评鼓励一下我的我们哦！', 'order');
            }
            return msg('操作超时,请稍后重试!');
        }
    }


    // 下单成功
    public function ck() 
    {
        
        if (isset($_GET['a'])) {
            if ($_GET['a'] == 'orderSuccess') {
                return msg('下单成功!', 'order');
            }
        }
        return msg('你还没有登录,请先登录!', 'login?a=ck');
    }
}
