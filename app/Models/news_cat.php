<?php

namespace App\Models;

use App\Trait\date_convert;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class news_cat extends Model
{
    use HasFactory,SoftDeletes,date_convert;
    protected $fillable=[
        'seo_title',
        'seo_url',
        'seo_h1',
        'seo_canonical',
        'seo_redirect',
        'seo_redirect_kind',
        'seo_index_kind',
        'seo_keyword',
        'seo_description',
        'title',
        'catid',
        'pic_banner',
        'alt_pic',
        'order',
        'state',
    ];
    public function sub_cats(){
        return $this->hasMany(news_cat::class,'catid')->with('sub_cats')->select("id","title","catid");
    }

    public function scopeFilter(Builder $builder , $params){
        if(!empty($params['catid'])){
            $builder->where("catid",$params["catid"]);
        }else{
            $builder->where("catid",'0');
        }
        if(!empty($params['title'])){
            $builder->where('title', 'like', '%' . $params["title"] . '%');
        }
        return $builder;
    }


    public function news(){
        return $this->hasMany(news::class,'catid');
    }
}
