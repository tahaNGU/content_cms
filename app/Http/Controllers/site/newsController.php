<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\news;
use App\Models\news_cat;
use Carbon\Carbon;
use Illuminate\Http\Request;

class newsController extends Controller
{
    public function index(news_cat $news_cat=null){
        $news_cats=news_cat::where('state','1')->orderByRaw("`order` ASC, `id` DESC")->get(['id','title','seo_url']);
        if($news_cat==null){
            $news = news::siteFilter()->paginate(1)->withQueryString();
        }else{
            $news=$news_cat->news()->siteFilter()->paginate(1)->withQueryString();
        }
        return view('site.news',compact('news_cat','news','news_cats'));
    }
}
