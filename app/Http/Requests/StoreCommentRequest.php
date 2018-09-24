<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreCommentRequest
 * @package App\Http\Requests
 */
class StoreCommentRequest extends FormRequest
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
            'body' => 'required|min:2',
        ];

        if(\Request::segment(1) === 'admin') {
            $rules['user_id'] = 'required|integer';
            $rules['post_id'] = 'required|integer';
        }

        return $rules;
    }
}
