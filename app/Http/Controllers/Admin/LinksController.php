<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class LinksController extends CommonController
{
    protected $model = 'Links';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
       $data = model($this->model)->index($req);
       return view('admin.links.index',['data'=>$data,'req'=>$req]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.links.add',['title'=>'添加外链']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        // //获取添加链接信息
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
        //获取修改信息
        $data=model($this->model)::find($id);
        //显示修改页面
        return view('admin.links.edit',['title'=>'外链修改页','data'=>$data]);
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
        //接收要修改的信息
        return model($this->model)->edit($id, $req->except('_token', '_method'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //执行删除
        
        $src = u(LINKS_IMG) . model($this->model)->find($id)->logo;
        if (model($this->model)::destroy($id)) {
            @unlink($src);
            $data = ['status' => 0, 'msg' => '删除外链成功!'];
        } else {
            $data = ['status' => 1, 'msg' => '删除外链失败!'];
        }
        return $data;

        //  try{
        //     $rs=model($this->model)::destroy($id);
        //     if($rs) return '1';
        // }catch(\Exception $e){
        //     return '0';
        // }
    }

}
