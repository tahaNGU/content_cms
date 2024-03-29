<?php

namespace App\Models;

use App\Trait\date_convert;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Trait\admin;
class permissions extends Model
{
    use HasFactory,SoftDeletes,date_convert,admin;
    protected $fillable=['name','access','check_all','admin_id'];
    protected $appends=['decode_access'];
    protected $table="permission";

    public function scopeFilter(Builder $builder,array $params){
        if(!empty($params['name'])){
            $builder->where('name', 'like', '%' . $params["name"] . '%');
        }
        return $builder;
    }

    public function getDecodeAccessAttribute(){
        return json_decode($this->access);
    }
}
