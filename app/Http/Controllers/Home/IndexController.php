<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\AdModel;
use App\Http\Model\Admin\GoodsBrandModel;
use App\Http\Model\Admin\NoticeCateModel;
use DB;
class IndexController extends CommonController
{
     protected $model='Cate';
    /**
     * 前台主页
     * @url /
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //栏目
        $res =model('Notice')->orderBy('id','desc')->paginate(5);

        //分类
        $data=model($this->model)->getcate();
        // where('status','!=','1')->limit(5)

        //栏目
        $notice=NoticeCateModel::getcate();
        // dd($notice);
        //轮播图
        // $ads=AdModel::paginate(100)->groupBy('title')['大春物'];
        $ads=AdModel::select('src','title','ad_name')->orderBy('sort')->limit(11)->get();
        $src=[];
        $title=[];
        foreach ($ads as $k => $v) {
            $tit=[];
            $src[]=$v->src;
            $tit['title']=$v->title;
            $tit['ad_name']=$v->ad_name;
            $title[]=$tit;
        }
        $ads=[$src,$title];
        // dd($ads);
        //前台页面
        return view('home.index.index',['data'=>$data,'res'=>$res,'ads'=>$ads,'notice'=>$notice]);
    }

    /**
     * 前台商品详情
     * @url /goods_detail
     * @return \Illuminate\Http\Response
     */
    public function goods()
    {
        
        return view('home.goods');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
