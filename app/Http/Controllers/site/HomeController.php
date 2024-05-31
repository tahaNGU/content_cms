<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\banner;
use App\Models\instagram;
use App\Models\news;
use App\Models\page;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function main()
    {
        $news = news::where('state_main', '1')->where('state', '1')->where('validity_date', '<=', Carbon::now()->format('Y/m/d H:i:s'))->orderBy('order', 'desc')->with(['news_cat'])->limit('5')->get(['title', 'note', 'pic', 'catid','validity_date']);
        $instagram_posts = instagram::where('state_main', '1')->where('state', '1')->orderBy('order', 'desc')->limit('5')->get();

        return view('site.main', compact('news','instagram_posts'));
    }

    public function about(){
        return view('site.about');
    }
}
