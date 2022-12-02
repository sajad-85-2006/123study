<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class mail extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|min:3|max:50|string',
            'msg_subject'=>'required|min:3|max:250',
            'email'=>'required|min:3|max:100|email',
            'phone_number'=>'required|min:3|max:50',
            'message'=>'required|min:4',
        ];
    }
}
