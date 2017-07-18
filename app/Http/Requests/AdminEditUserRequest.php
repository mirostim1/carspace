<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminEditUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'     => 'required|min:5|max:100',
            'email'    => 'required|min:7|max:150',
            'role_id'     => 'required',
            'is_active'   => 'required'
        ];
    }
}
