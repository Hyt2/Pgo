<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Model\Admin\UserModel;

class UserController extends CommonController
{
    public $model='User';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data=model($this->model)->paginate(5);
        return view('admin/user/index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //用户状态更改
    public function store(Request $req)
    {
        $stas=$req->only('status');
        if($stas['status']=='up'){
            //更新状态
             session(['status'=>'down']);
             $stas['status']='down';
             $msg='已禁用!';
         }else{
            session(['status'=>'up']);
            $stas['status']='up';
            $msg='已启用!';
         }
        $uid=$req->input('uid');
        $rs=model($this->model)->where('uid',$uid)->update($stas);
        if($rs){
            $data=['reload'=>true,'msg'=>$msg];
        }else{
            $data=['reload'=>false,'msg'=>'操作失败!'];
        } 
        return $data;
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
        //
         // $data=model($this->model)->where('uid',$id)->value('activate');
         // if($data==1){

         // }
         $rs=model($this->model)->where('uid',$id)->update(['activate'=>1]);
        if(!$rs) return ['reload'=>false,'msg'=>'该用户已激活!'];
        return ['reload'=>true,'msg'=>'激活成功!'];
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
    }
}
