<?php

namespace App\Models;

use App\Trait\date_convert;
use App\Trait\morph_content;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Morilog\Jalali\Jalalian;

class news extends Model
{
    use HasFactory, SoftDeletes, date_convert, morph_content;

    protected $appends = ['validate_date_admin', 'short_note', 'alt_image'];
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
        return $this->belongsTo(news_cat::class, 'catid')->select("id", "title", "seo_url");
    }

    public function getValidateDateAdminAttribute()
    {
        $validate_date_admin[0] = Jalalian::forge($this->validity_date)->format('Y/m/d');
        $validate_date_admin[1] = ltrim(Jalalian::forge($this->validity_date)->format('H'), "0");
        $validate_date_admin[2] = ltrim(Jalalian::forge($this->validity_date)->format('i'), "0");
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

    public function getShortNoteAttribute()
    {

        return Str::substr($this->note, 0, 150);
    }

    public function getAltImageAttribute()
    {
        return !empty($this->alt_pic) ? $this->alt_pic : $this->title;
    }

    public function scopeSiteFilter(Builder $builder)
    {
        $builder->where('state', '1')->where('validity_date', '<=', Carbon::now()->format('Y/m/d H:i:s'))->orderByRaw("`order` ASC, `id` DESC")->with(['news_cat'])->select(['title', 'note', 'pic', 'catid', 'validity_date', 'alt_pic']);
        if (!empty(request()->has('keyword'))) {
            $builder->where('title', 'like', '%' . request()->get('keyword') . '%');
        }
        return $builder;
    }


}
