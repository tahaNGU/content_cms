<?php
namespace App\Trait;
trait Rate
{
    public function rate(){
        return $this->morphMany(\App\Models\Rate::class,'ratable');
    }
}
