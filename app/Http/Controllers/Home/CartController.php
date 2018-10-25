<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

class CartController extends CommonController
{


    public function index()
    {
        if (!session('UserInfo')) {
            return msg('你还未登录,请先登录!', 'login');
        }

        $uid = session('UserInfo.uid');
        if (empty($_SESSION['cart-' . $uid])) {
            return view('home.cart.empty');
        }



        $carts = $_SESSION['cart-' . $uid];

        return view('home.cart.index', ['carts' => $carts]);

    }

    public function cahngecnt(Request $request) 
    {

        if (!session('UserInfo')) {
            return 3;
        }

        $goodsId = $request->post('goods_id');
        $cnt = $request->post('cnt');
        
        $uid = session('UserInfo.uid');
        if (isset($_SESSION["cart-$uid"][$goodsId])) {
            $cart = $_SESSION["cart-$uid"][$goodsId];
            $_cnt = $cart['cnt'];
            if ($_cnt == $cnt) {
                return 2; // 没有改动
            }

            $_SESSION["cart-$uid"][$goodsId]['cnt']   = $cnt;
            $_SESSION["cart-$uid"][$goodsId]['price'] = ($cart['shop_price'] * $cnt);

            return 1;

        }

        return 2;
    }

    public function add(Request $request) 
    {
        if (!session('UserInfo')) {
            return msg('你还未登录,请先登录!', 'login');
        }


        $goodsId = $request->post('goods_id');
        $cnt     = $request->post('cnt');
        $attr    = $request->except('_token', 'goods_id', 'cnt');
        $uid     = session('UserInfo.uid');

        if (!$attr) {
            return 5;
        }

        if (isset($_SESSION["cart-$uid"][$goodsId])) {
            // dd($attr);
            /*$flag = 0;    
            foreach ($_SESSION["cart-$uid"][$goodsId]['attrs'] as $k => $v) 
            {   
                foreach ($attr as $kk => $vv) {
                    if ($k == $kk) {
                        if ($v == $vv) {
                            $flag++;
                        }
                    }
                }
            }

            if ($flag == 2) {
                $cnts  = $_SESSION["cart-$uid"][$goodsId]['cnt'];
                $price = $_SESSION["cart-$uid"][$goodsId]['price'];
                $cnts  = $cnt + $cnts;
                $_SESSION["cart-$uid"][$goodsId]['cnt'] = $cnts;
                $_SESSION["cart-$uid"][$goodsId]['price'] = ($cnts * $price);

                return 1;
            }*/

            $cnts  = $_SESSION["cart-$uid"][$goodsId]['cnt'];
                $price = $_SESSION["cart-$uid"][$goodsId]['price'];
                $cnts  = $cnt + $cnts;
                $_SESSION["cart-$uid"][$goodsId]['cnt'] = $cnts;
                $_SESSION["cart-$uid"][$goodsId]['price'] = ($cnts * $price);
            return 1;
        }

        $goods   = model('Goods')->find($goodsId);
        $_SESSION["cart-$uid"][$goodsId]['goods_name'] = $goods->goods_name;
        $_SESSION["cart-$uid"][$goodsId]['price']      = ($goods->shop_price * $cnt);
        $_SESSION["cart-$uid"][$goodsId]['cnt']        = $cnt;
        $_SESSION["cart-$uid"][$goodsId]['goods_img']  = $goods->goods_img;
        $_SESSION["cart-$uid"][$goodsId]['shop_price'] = ($goods->shop_price);
        $_SESSION["cart-$uid"][$goodsId]['attrs']      = $attr;
        $_SESSION["cart-$uid"][$goodsId]['kc']         = $goods->goods_kc;


        return 1;
    }

    public function doAdd() 
    {
        if (!session('UserInfo')) {
            return msg('你还未登录,请先登录!', 'login');
        }
        $goods = \DB::select('SELECT *,RAND() as r FROM `goods` ORDER BY r LIMIT 0,5');
        return view('home.cart.add', compact('goods'));
    }


    public function del(Request $request) 
    {
        if (!session('UserInfo')) {
            return msg('你还未登录,请先登录!', 'login');
        }
        $goodsId = $request->post('goods_id');
        $uid = session('UserInfo.uid');

        if (isset($_SESSION["cart-$uid"][$goodsId])) {
            unset($_SESSION["cart-$uid"][$goodsId]);
        }

        return 1;

    }

    public function inc($goodsId) 
    {
        if (!session('UserInfo')) {
            return msg('你还未登录,请先登录!', 'login');
        }
        $uid = session('UserInfo.uid');
        $_SESSION["cart-$uid"][$goodsId]['cnt']++;
        $_SESSION["cart-$uid"][$goodsId]['price'] = ($_SESSION["cart-$uid"][$goodsId]['price'] + $_SESSION["cart-$uid"][$goodsId]['shop_price']);

        return redirect('cart');


    }

    public function dec($goodsId) 
    {
        if (!session('UserInfo')) {
            return msg('你还未登录,请先登录!', 'login');
        }
         $uid = session('UserInfo.uid');

         if ($_SESSION["cart-$uid"][$goodsId]['cnt'] <= 1) {
             $_SESSION["cart-$uid"][$goodsId]['cnt'] = 1;
             return redirect('cart');
         }

         $_SESSION["cart-$uid"][$goodsId]['cnt']--;
         $_SESSION["cart-$uid"][$goodsId]['price'] = ($_SESSION["cart-$uid"][$goodsId]['price'] - $_SESSION["cart-$uid"][$goodsId]['shop_price']);

        return redirect('cart');
    }
}
