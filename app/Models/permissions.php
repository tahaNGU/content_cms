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
    use HasFactory,SoftDeletes;
    protected $fillable=["title","role"];
    protected $appends=["title_fa"];

    public function getTitleFaAttribute(){
        $title= explode("-",$this->title);
        return trans("modules.crud.".$title[0])." ".trans("modules.module_name.".$title[1]);
    }

}
