<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class NavController extends CommonController
{
     protected $model = 'Nav';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        //
        $data=model($this->model)->index($req);
        return view('admin.nav.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.nav.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //
        return model($this->model)->add($req->except('_token'));
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
        //
        $data=model($this->model)::find($id);
        return view('admin.nav.edit',['data'=>$data,'title'=>'品牌管理']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        //
        $data=$req->except('_token','_method');
        return model($this->model)->edit($data,$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try{
            model($this->model)::destroy($id);
            $data = ['status' => 0, 'msg' => '删除外链成功!'];
        }catch(\Exception $e){
             $data = ['status' => 1, 'msg' => '删除外链失败!'];
        }
        return $data;
    }
}
