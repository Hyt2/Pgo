<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

/**
 * [AdminController 后台管理员模块应用控制器]
 * @author [阳] <[<email add 1025958116@qq.com>]>
 */
class OrderController extends CommonController
{
    /**
     * [$model <该控制器主要用到的模型>]
     * [<使用model函数快捷创建,不含Model后缀>]
     * @var string [<模型的名称>]
     */
    protected $model = 'Order';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.order.index', ['orders' => model($this->model)->getData()]);
    }


    public function showOrder($id)
    {
        $details = model('OrderDetail')::where('orders_id', $id)->get();
        return view('admin.order.show', compact('details'));
    }

    public function send($id)
    {
        $order = model($this->model)->find($id);
        $order->status = 2;
        $order->save();
        return redirect('/admin/order');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.order.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        return model($this->model)->add($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.order.edit', ['order' => model($this->model)::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return model($this->model)->edit($id, $request->except('_method', '_token'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
