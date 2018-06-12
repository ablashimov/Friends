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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
                {
                    return [];
                }
            case 'POST':
                {
                    return [
                        'tittle' => 'bail|required|string|min:5|max:100',
                        'article' => 'bail|required|string|min:10',
                        'file' => 'bail|required|image|mimes:jpeg,png,jpg,gif,svg|max:8048'
                    ];
                }
            case 'PUT':
            case 'PATCH':
                {
                    return [
                        'tittle' => 'bail|required|string|min:5|max:100',
                        'article' => 'bail|required|string|min:10',
                        'file' => 'bail|nullable|image|mimes:jpeg,png,jpg,gif,svg|max:8048'
                    ];
                }
            default:
                break;
        }
    }
}
