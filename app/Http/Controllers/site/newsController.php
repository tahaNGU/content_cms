<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\news;
use App\Models\news_cat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class newsController extends Controller
{
    public function index(news_cat $news_cat = null)
    {

        $news_cats = news_cat::where('state', '1')->orderByRaw("`order` ASC, `id` DESC")->get(['id', 'title', 'seo_url']);
        $hit_news = news::where('state', '1')->where('validity_date', '<=', Carbon::now()->format('Y/m/d H:i:s'))->orderByRaw("`order` ASC, `id` DESC")->with(['news_cat'])->select(['title', 'note', 'pic', 'catid', 'validity_date', 'alt_pic','seo_url'])->orderByRaw("`hit` ASC, `id` DESC")->get();
        if ($news_cat == null) {
            $news = news::siteFilter()->paginate(5)->withQueryString();
        } else {
            $news = $news_cat->news()->siteFilter()->paginate(5)->withQueryString();
            if (!$news_cat->state)
                abort(404);
//            if (!empty($news_cat->seo_redirect)) {
//
//                return Redirect::to($news_cat->seo_redirect, $news_cat->seo_kind_redirect ?? 301);
//            }
        }
        return view('site.news', compact('news_cat', 'news', 'news_cats', 'hit_news'));
    }

    public function show(news $news)
    {
        if (!$news->state)
            abort(404);
        return view('site.news_info', compact('news'));
    }
}
