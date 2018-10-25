<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Admin\NoticeModel;
use App\Http\Model\Admin\NoticeCateModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends CommonController
{

    protected $model = 'Cate';
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

        //品牌
        /*$brand = GoodsBrandModel::all();*/
        $brand   = model('GoodsBrand')->where('status', '1')->orderBy('id','asc')->get();


        $ads   = model('Ad')::select('src','title','ad_name','bgcolor','url')->orderBy('sort')->limit(11)->get();
        /*$src   = [];
        $title = [];
        foreach ($ads as $k => $v) {
            $tit              = [];
            $src['src'][]     = $v->src;
            // $src['bgcolor'][] = $v->bgcolor;
            $tit['title']     = $v->title;
            $tit['ad_name']   = $v->ad_name;
            $title[]          = $tit;
        }
        $ads          = [$src,$title];*/

        $image   = [];
        $title = [];
        foreach ($ads as $k => $v) {
            $tit            = [];
            $img            = [];
            $img[]          = $v->src;
            $img[]          = $v->bgcolor;
            $img[]          = $v->url;
            $tit['title']   = $v->title;
            $tit['ad_name'] = $v->ad_name;
            $title[]        = $tit;
            $image[]        = $img;
        }
        $ads = [$image,$title];



        // dd($ads);
        $cate         = model('Cate');
        $_cates       = $cate->where('show', '1')->where('pid', 0)->orderBy('sort', 'DESC')->take(3)->get();
        static $cates = [];
        foreach ($_cates as $k => $v) 
        {
            $cates[$v->id] = $v;
            $cates[$v->id]['child'] = $cate->where('show', '1')->where('pid', $v->id)->orderBy('sort', 'DESC')->get();
        }


        return view('home.index.index',[
            'res'    => $res,
            'brand'  => $brand,
            'ads'    => $ads,
            'cates'  => $cates,
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
     * 前台栏目跳转显示栏目文章
     */
    public function notice_cate($id)
    {
        $content = NoticeModel::where('cate_id',$id)->first();
        if($content){
            $num = $content->notice_show;
            $num ++;
            NoticeModel::where('id',$id)->update(['notice_show'=>$num]);
            $res = NoticeModel::orderBy('notice_show','desc')->paginate(10);
            return view('home.notice_cate',['res'=>$res,'content'=>$content]);
        }else{
            return back();
        }
    }

    //获取二级分类
    public function twocate(Request $req)
    {
        return $data=model($this->model)->getcate($req->input('pid'));
    }


}
