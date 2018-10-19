<?php

namespace App\Http\Controllers\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\AdModel;
use App\Http\Model\Admin\GoodsBrandModel;
use App\Http\Model\Admin\NoticeCateModel;
use App\Http\Model\Admin\NoticeModel;
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
        $res     = model('Notice')->orderBy('id','desc')->paginate(5);

        //分类
        $data    = model($this->model)->getcate();

        //品牌
        /*$brand = GoodsBrandModel::all();*/
        $brand   = model('GoodsBrand')->orderBy('id','asc')->get();


        $ads   = model('Ad')::select('src','title','ad_name')->orderBy('sort')->limit(11)->get();
        $src   = [];
        $title = [];
        foreach ($ads as $k => $v) {
            $tit            = [];
            $src[]          = $v->src;
            $tit['title']   = $v->title;
            $tit['ad_name'] = $v->ad_name;
            $title[]        = $tit;
        }
        $ads = [$src,$title];

        return view('home.index.index',[
            'data'   => $data,
            'res'    => $res,
            'brand'  => $brand,
            'ads'    => $ads,
        ]);
    }


    /**
     * 前台商品文章显示
     *
     */
    public function notice($id)
    {
        $content = NoticeModel::find($id);
        if($content){
            $num = $content->notice_show;
            $num ++;
            NoticeModel::where('id',$id)->update(['notice_show'=>$num]);
        }
        $res = NoticeModel::orderBy('notice_show','desc')->paginate(10);

        return view('home.notice_content',['content'=>$content,'res'=>$res]);
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
