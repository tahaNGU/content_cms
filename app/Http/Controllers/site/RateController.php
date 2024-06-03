<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\comment;
use App\Models\news;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function store(Request $request, $module, $item_id)
    {
        $model = self::model($module);
        $module = $model::find($item_id);
        if (!$module::find($item_id)->rate()->count()) {
            $module::find($item_id)->rate()->create([
                'rate_number' => $request->rate,
                'user_id'=>auth()->id()
            ]);
        } else {
            echo json_encode(["error"=>trans("common.rate.rated","شما قبلا امتیاز ث")]);
        }


    }


    public function model($module)
    {
        $models = [
            'news' => news::class
        ];
        return $models[$module];
    }
}
