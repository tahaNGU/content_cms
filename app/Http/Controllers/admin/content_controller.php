<?php

namespace App\Http\Controllers\admin;

use App\base\class\admin_controller;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\content_request;
use App\Models\content;
use App\Models\news;
use App\Trait\ResizeImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class content_controller extends Controller
{

    use ResizeImage;

    private string $view = "";
    private string $module = "";
    private string $module_title = "";

    public function __construct()
    {
        $this->view = "admin.module.content.";
        $this->module = "content";
        $this->module_title = __("modules.module_name." . $this->module);
    }

    public function create($item_id, $module)
    {
        $content_kind = __("common.content." . $module);
        return view($this->view . "new", [
            'module_title' => $this->module_title,
            'content_kind' => $content_kind,
            'item_id' => $item_id,
            'module_type' => $module,
            'module' => $this->module,
        ]);
    }

    public function store(content_request $request, $item_id, $module)
    {
        DB::beginTransaction();
        $module_content = self::modal_content()[$module];
        $contentable = $module_content::findOrFail($item_id);
        $pic = '';
        $catalog = '';
        $video = '';
        $pic_video = '';
        if ($request->kind == "2") {
            $pic = $this->resize_pic($request->pic, $this->module . "_" . $module, 'pic');
        }
        if ($request->kind == "4") {
            $catalog = $this->resize_pic($request->catalog, $this->module . "_" . $module, 'catalog');
        }
        if ($request->kind == "5" && $request->is_aparat != "1") {
            $video = $this->resize_pic($request->video, $this->module . "_" . $module, 'video');
            if ($request->has("pic_video")) {
                $pic_video = $this->resize_pic($request->pic_video, $this->module . "_" . $module, 'pic_video');
            }
        }
        $contentable->content()->create([
            'title' => $request->title,
            'kind' => $request->kind,
            'note' => $request->note,
            'pic' => $pic,
            'is_aparat' => $request->is_aparat,
            'catalog' => $catalog,
            'video' => $video,
            'pic_video' => $pic_video,
            'note_more' => $request->note_more,
        ]);
        DB::commit();
        return back()->with('success', __('common.messages.success', [
            'module' => $this->module_title
        ]));
    }


    public function list(Request $request, $item_id, $module)
    {
        $module_content = self::modal_content()[$module];
        $model = $module_content::findOrFail($item_id);
        $content = $model->content()->filter($request->all())->paginate(10)->withQueryString();
        $content_kind = __("common.content." . $module);

        return view($this->view . "list", [
            'module_title' => $this->module_title,
            'item_id' => $item_id,
            'module_type' => $module,
            'module' => $this->module,
            'model' => $model,
            'content' => $content,
            'content_kind' => $content_kind,
        ]);
    }

    public function destroy(string $id)
    {
        content::where('id', $id)->where('admin_id', '1')->delete();
        return true;
    }

    public function action_all(Request $request)
    {
        $filed_validation = ['item' => 'required'];
        $validator = Validator::make($request->all(), $filed_validation);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        return (new admin_controller())->action($request, content::class);
    }

    public function edit($item_id, $module)
    {
        $content = content::where("id", $item_id)->where("admin_id", "1")->where("contentable_type", self::modal_content()[$module])->firstOrFail();
        return view($this->view . "edit", [
            'module_title' => $this->module_title,
            'item_id' => $item_id,
            'module_type' => $module,
            'module' => $this->module,
            'content' => $content,
        ]);
    }

    public function update(content_request $request, $item_id, $module)
    {
        DB::beginTransaction();
        $pic = '';
        $catalog = '';
        $video = '';
        $pic_video = '';
        if ($request->kind == "2") {
            if (is_object($request->pic)) {
                $pic = $this->resize_pic($request->pic, $this->module . "_" . $module, 'pic');
            } else {
                $pic = $request->pic;
            }
        }
        if ($request->kind == "4") {
            if (is_object($request->catalog)) {
                $catalog = $this->resize_pic($request->catalog, $this->module . "_" . $module, 'catalog');
            } else {
                $catalog = $request->catalog;
            }
        }
        if ($request->kind == "5" && $request->is_aparat != "1") {
            $request->note_more="";
            if (is_object($request->video)) {
                $video = $this->resize_pic($request->video, $this->module . "_" . $module, 'video');
            } else {
                $video = $request->video;
            }
            if ($request->has("pic_video")) {
                if (is_object($request->pic_video)) {
                    $pic_video = $this->resize_pic($request->pic_video, $this->module . "_" . $module, 'pic_video');
                }else{
                    $pic_video=$request->pic_video;
                }
            }
        }
        content::find($item_id)->update([
            'title' => $request->title,
            'kind' => $request->kind,
            'note' => $request->note,
            'pic' => $pic,
            'is_aparat' => $request->is_aparat,
            'catalog' => $catalog,
            'video' => $video,
            'pic_video' => $pic_video,
            'note_more' => $request->note_more,
        ]);

        DB::commit();
        return back()->with('success', __('common.messages.success_edit', [
            'module' => $this->module_title
        ]));

    }


    private function modal_content()
    {
        return [
            'news' => news::class
        ];
    }
}
