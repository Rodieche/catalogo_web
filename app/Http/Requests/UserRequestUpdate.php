<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Http\User;

class UserRequestUpdate extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'      =>  'min:8|required|max:120',
            'email'     =>  'required|email|unique:users,id,email',
        ];
    }
}
