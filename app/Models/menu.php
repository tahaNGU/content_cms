<?php

namespace App\Models;

use App\Trait\date_convert;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class menu extends Model
{
    use HasFactory, SoftDeletes, date_convert;
    protected $table="menu";
    protected $fillable = [
        'title', 
        'pic', 
        'type', 
        'alt_pic', 
        'state', 
        'order',
        'open_type', 
        'address',
        'catid'
    ];

    protected $appends = ['type_name'];

    public function getTypeNameAttribute()
    {
        return trans('common.menu_kind')[$this->type];
    }

    public function scopeFilter(Builder $builder, $params)
    {
        if (!empty($params['title'])) {
            $builder->where('title', 'like', '%' . $params['title'] . '%');
        }
        if (!empty($params['type'])) {
            $builder->where('type', $params['type']);
        }
        return $builder;
    }

    public function sub_menus(){
        return $this->hasMany(menu::class,'catid')->with('sub_menus')->select("id","title","catid");
    }

}
