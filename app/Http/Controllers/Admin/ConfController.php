<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

/**
 * [AdminController 后台系统配置模块应用控制器]
 * @author [阳] <[<email add 1025958116@qq.com>]>
 */

class ConfController extends CommonController
{
    protected $model = 'Conf';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.conf.index', ['confs' => model($this->model)->getConf()]);
    }

    /**
     * Display a view of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function info(Request $request)
    {
        if ($data = $request->except('_token')) {
            return model($this->model)->confInfo($data, $request->file());
        } else {
            return view('admin.conf.info', ['conf_res' => model($this->model)->getInfo()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.conf.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return model($this->model)->add($request->except('_token'));
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
        return view('admin.conf.edit', ['conf' => model($this->model)->find($id)]);
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
        return model($this->model)->edit($id, $request->except('_token', '_method'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return model($this->model)->del($id);
    }
}
