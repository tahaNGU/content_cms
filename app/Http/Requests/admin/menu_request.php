<?php

namespace App\Http\Requests\admin;

use App\Rules\subid_in_catid;
use Illuminate\Foundation\Http\FormRequest;

class menu_request extends FormRequest
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
        return [
            'title' => ['required', 'string', 'min:1', 'max:255'],
            'type' => ['required', 'integer', 'min:-128', 'max:127'],
            'open_type' => ['required', 'integer'],
            'pic' => ['nullable','mimes:jpeg,png,jpg,gif,svg,webp','max:'.env('MAXIMUM_FILE')],
            'alt_pic' => ['nullable', 'string', 'min:1', 'max:255'],
            'address' => ['nullable', 'string', 'min:1', 'max:255']
        ];

      
        
        // if ($this->type == '1' && is_string($this->pic) && in_array(pathinfo($this->pic, PATHINFO_EXTENSION), ['jpeg', 'png', 'jpg', 'gif', 'svg', 'webp'])) {
        //     unset($rules["pic"]);
        // }

        if(isset($this->id)){
            if($this->id == $this->catid){
                $rules['catid']=[new subid_in_catid($this->catid)];
            }
        }
        //reminder catid
    }
}
