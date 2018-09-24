<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StorePostRequest
 * @package App\Http\Requests
 */
class StorePostRequest extends FormRequest
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
        $rules = [
            'title' => 'required|min:3|max:80',
            'body' => 'required|min:3|max:500',
        ];

        if(\Request::segment(1) === 'admin') {
                $rules['user_id'] = 'required|integer';
        }

        return $rules;
    }
}
