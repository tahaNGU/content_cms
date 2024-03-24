<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class content_request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules= [
            'title'=>['required','string','min:1',"max:255"],
            'kind'=>['required','integer','min:1'],
            'note'=>['required_if:kind,1','required_if:kind,6','nullable','string', 'min:1', 'max:255'],
            'pic'=>['required_if:kind,2','nullable', 'mimes:jpeg,png,jpg,gif,svg,webp','max:'.env('MAXIMUM_FILE')],
            'catalog'=>['required_if:kind,4','nullable','mimes:jpeg,png,jpg,gif,svg,webp,pdf','max:'.env('MAXIMUM_FILE')],
            'video'=>['required_if:kind,5','nullable','mimes:mp4,mov,ogg,qt','max:'.env('MAXIMUM_FILE')],
            'pic_video'=>['nullable','mimes:jpeg,png,jpg,gif,svg,webp','max:'.env('MAXIMUM_FILE')],
            'note_more'=>['required_if:kind,7','nullable','string'],
        ];
        if(is_string($this->pic) && in_array(pathinfo($this->pic,PATHINFO_EXTENSION),['jpeg','png','jpg','gif','svg','webp'])){
            unset($rules["pic"]);
        }
        if(is_string($this->catalog) && in_array(pathinfo($this->catalog,PATHINFO_EXTENSION),['jpeg','png','jpg','gif','svg','webp','pdf'])){
            unset($rules["catalog"]);
        }

        if(is_string($this->video) && in_array(pathinfo($this->video,PATHINFO_EXTENSION),['mp4','mov','ogg','qt'])){
            unset($rules["video"]);
        }

        if(is_string($this->pic_video) && in_array(pathinfo($this->pic_video,PATHINFO_EXTENSION),['jpeg','png','jpg','gif','svg','webp','pdf'])){
            unset($rules["pic_video"]);
        }

        if($this->kind == "5" && $this->is_aparat=="1"){
            unset($rules['video']);
            $rules["note_more"]=['required','string'];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'note.required_if'=>'پر کردن فیلد متن احباری است',
            'pic.required_if'=>'پر کردن فیلد تصویر احباری است',
            'catalog.required_if'=>'پر کردن فیلد کاتالوگ احباری است',
            'video.required_if'=>'پر کردن فیلد ویدیو احباری است',
            'note_more.required_if'=>'پر کردن فیلد متن احباری است',
        ];
    }
}
