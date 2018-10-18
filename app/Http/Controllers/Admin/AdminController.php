<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

/**
 * [AdminController 后台管理员模块应用控制器]
 * @author [阳] <[<email add 1025958116@qq.com>]>
 */
class AdminController extends CommonController
{
    /**
     * [$model <该控制器主要用到的模型>]
     * [<使用model函数快捷创建,不含Model后缀>]
     * @var string [<模型的名称>]
     */
    protected $model = 'Admin';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin.index', ['admins' => model($this->model)->getData()]);
    }


    public function ajaxChangStatus(Request $request) 
    {
        $admin  = model($this->model)::find($request->post('id'));
        if ($admin->status == 1) {
            $admin->status = 2;
            $admin->save();
        } else {
            $admin->status = 1;
            $admin->save();
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin.add');
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
        return view('admin.admin.edit', ['admin' => model($this->model)::find($id)]);
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
        $data = $request->except('_method', '_token');
        return model($this->model)->edit($id, $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = model($this->model);
        $old_img = u(ADMIN_IMG) . $model->find($id)->img;
        if (file_exists($old_img)) {
            @unlink($old_img);
        }

        if ($model->destroy($id)) {
            $data = ['status' => 0, 'msg' => '删除管理员成功!'];
        } else {
            $data = ['status' => 1, 'msg' => '删除管理员失败,请稍候再试!'];
        }
        return $data;
    }
}
