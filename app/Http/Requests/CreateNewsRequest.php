<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateNewsRequest extends Request
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
            'title_en' => 'required|unique:news|max:255',
            'title_vi' => 'required|unique:news|max:255',
            'contextual_en' => 'required|max:255',
            'contextual_vi' => 'required|max:255',

            'image' => 'required|max:255',
        ];
    }
}
