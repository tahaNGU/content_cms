<?php

namespace App\Models;

use App\Trait\date_convert;
use App\Trait\morph_content;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Morilog\Jalali\Jalalian;

class news extends Model
{
    use HasFactory, SoftDeletes, date_convert,morph_content;

    protected $appends = ['validate_date_admin'];
    protected $fillable = [
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
        'pic',
        'alt_pic',
        'pic_banner',
        'alt_pic_banner',
        'order',
        'state',
        'note',
        'note_more',
        'validity_date',
        'state_main',
    ];

    public function news_cat()
    {
        return $this->belongsTo(news_cat::class, 'catid')->select("id", "title");
    }



    public function getValidateDateAdminAttribute()
    {
        $validate_date_admin[0] = Jalalian::forge($this->validity_date)->format('Y/m/d');
        $validate_date_admin[1] = (Jalalian::forge($this->validity_date)->format('H') == "00") ? "0" : Jalalian::forge($this->validity_date)->format('H');
        $validate_date_admin[2] = (Jalalian::forge($this->validity_date)->format('i') == "00") ? "0" : Jalalian::forge($this->validity_date)->format('i');
        return $validate_date_admin;
    }

    public function scopeFilter(Builder $builder, $params)
    {
        if (!empty($params['catid'])) {
            $builder->where("catid", $params['catid']);
        }
        if (!empty($params['title'])) {
            $builder->where('title', 'like', '%' . $params["title"] . '%');
        }
        return $builder;
    }



}
