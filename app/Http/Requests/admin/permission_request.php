<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class permission_request extends FormRequest
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
            'name'=>['required','string','min:1','max:255'],
            'access'=>['required','array']
        ];
        if($this->check_all == '1'){
            unset($rules['access']);
        }
        return $rules;
    }

}
