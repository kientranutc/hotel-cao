<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request
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
            'username'=>'required|unique:users|max:255',
            'email' =>'required|unique:users|max:255',
            'fullname'=>'required|max:255',
            'password'=>'required|max:16|min:6',
            'c_password'=> 'required|same:password',

        ];
    }
}
