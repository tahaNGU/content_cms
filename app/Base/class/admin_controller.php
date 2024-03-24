<?php

namespace App\base\class;


class admin_controller
{


    public function action($request, $model)
    {
        if (method_exists(self::class, $request->action_type)) {
            $action_Type = $request->action_type;
            return json_encode(self::$action_Type($model, $request));
        } else {
            return false;
        }
    }

    private function delete_all($model, $request)
    {
        $model::whereIn('id', $request->item)->where("admin_id","1")->delete();
        return true;
    }

    private function change_order($model, $request)
    {
        foreach ($request->item as $key => $value) {
            $model::find($value)->update([
                'order' => $request->order[$value]
            ]);
        }
        return true;


    }

    private function change_state($model, $request)
    {
        foreach ($request->item as $id) {
            $module = $model::find($id);
            if ($module["state"]) {
                $module->update(["state" => '0']);
            } else {
                $module->update(["state" => '1']);

            }
        }
        return true;
    }

    private function change_state_main($model, $request)
    {

        foreach ($request->item as $id) {
            $module = $model::find($id);
            if ($request->change_state_main == '1') {
                $module->update(["state_main" => '1']);
            } else {
                $module->update(["state_main" => '0']);

            }
        }
        return true;
    }

    private function change_state_item($model, $request){
        $module = $model::find($request->item);

        if ($module[$request->column_name] == '0') {
            $module->update([$request->column_name => '1']);
        } else {
            $module->update([$request->column_name => '0']);

        }
        return true;
    }


}

