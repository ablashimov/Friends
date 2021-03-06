<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelpFormRequest extends FormRequest
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
            'name' => 'bail|required|max:100',
            'email' => 'bail|email|required|max:150',
            'phone' => 'required|min:8|digits_between: 8,15',
            'theme' => 'bail|required|max:100',
            'message' => 'bail|required|max:500'
        ];
    }
}
