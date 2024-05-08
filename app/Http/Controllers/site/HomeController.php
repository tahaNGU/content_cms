<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\news;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function main()
    {
        echo "ok";
        $news = news::where('state_main', '1')->where('state', '1')->where('validity_date', '<=', Carbon::now()->format('Y/m/d H:i:s'))->orderBy('order', 'desc')->with(['news_cat'])->limit('5')->get(['title', 'note', 'pic', 'catid','validity_date']);
        return view('site.main', compact('news'));
    }
}
