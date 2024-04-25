<?php

namespace App\Http\Controllers\site\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\site\commentRequest;
use App\Models\news;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class commentController extends Controller
{
    public function store(Request $request,string $type,int $module_id){
        $validation=Validator::make($request->all(),[
            'note'=>'required|string',
        ]);
        if($validation->fails()){
            return response()->json($validation->errors());
        }

        $model = self::model($type);
        $commentable = $model::findOrFail($module_id);
        $commentable->comment()->create([
            'note'=>$request->note,
            'ip_address'=>request()->ip(),
            'user_id'=>auth()->id(),
        ]);
        return response()->json([
            'success'=>'comment created successfully'
        ],202);
    }



    private function model($model)
    {
        $models= [
            'news' => news::class
        ];
        return $models[$model];
    }



}
