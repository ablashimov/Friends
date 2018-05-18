<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformationsRequest extends FormRequest
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
            'tittle' => 'required|min:10',
			'article' => 'required',
			'file' => 'mimes:jpeg,png,jpg,gif,svg|max:8048'
        ];
    }
}
