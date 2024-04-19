<?php

namespace App\Http\Controllers\site\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\site\commentRequest;
use App\Models\news;
use Carbon\Carbon;
use Illuminate\Http\Request;

class commentController extends Controller
{
    public function store(commentRequest $request,string $type,int $module_id){
        $model = self::model($type);
        $commentable = $model::findOrFail($module_id);
        $commentable->comment()->create([
            'note'=>$request->note,
            'user_id'=>auth()->id(),
        ]);
    }



    private function model($model)
    {
        $models= [
            'news' => news::class
        ];
        return $models[$model];
    }
}
