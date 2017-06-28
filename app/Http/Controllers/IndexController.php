<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Category;
use App\Model\Future;
use App\Model\Nav;
use App\Model\Resume;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function index()
    {
        //导航栏
        $nav=Nav::all();
        //简历
        $user=Resume::all();
        //未来
        $future=Future::all();
        //分类
        $cate=Category::where('cid','<=','6')->get();
        //生活分类
        $art=DB::table('articles')
            ->join('categories','articles.cid','=','categories.cid')
            ->where('categories.cid','7')->get();
        return view('welcome',compact('nav','user','cate','art','future'));
    }

    //显示分类
    public function category( $cid)
    {
        //验证cid是否是数字或者大于数据库最大值
        if (  !is_numeric($cid) || $cid >Category::max('cid') ){
//            abort(404);
            return '请重试';
        }
        //导航栏显示
        $nav=Nav::all();
        //获取文章数量
        $count=DB::table('categories')
            ->join('articles','articles.cid','=','categories.cid')
            ->where('categories.cid',$cid)->count();
        if ($count == 0){
            //没有数据则输出分类
            $article=Category::where('cid',$cid)->get();
        }else{
            $article=DB::table('categories')
                ->join('articles','articles.cid','=','categories.cid')
                ->where('categories.cid',$cid)->paginate(1);
        }
        return view('list',compact('nav','article'));

    }

    //文章详情
    public function article($aid)
    {
        //验证aid是否是数字或者大于数据库最大值
        if (  !is_numeric($aid) || $aid >Article::max('aid') ){
            return '请重试';
        }
        //导航栏
        $nav=Nav::all();
        //文章显示
        $art=Article::where('aid',$aid)->get();
        $article=DB::table('articles')
                    ->join('categories','articles.cid','=','categories.cid')
                    ->where('aid',$aid)->get();

        $cid=$article[0]->cid;
        //上一章
        $pre=Article::where('aid','<',$aid)->orwhere('cid',$cid)->orderBy('aid','desc')->limit(1)->get();
        //下一章
        $next=Article::where('aid','>',$aid)->orwhere('cid',$cid)->orderBy('aid','asc')->limit(1)->get();
        return view('article',compact('nav','art','article','pre','next'));
    }

}
