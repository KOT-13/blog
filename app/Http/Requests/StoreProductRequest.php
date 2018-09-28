<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreProductRequest
 * @package App\Http\Requests
 */
class StoreProductRequest extends FormRequest
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
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'price' => 'required|min:1|max:999|numeric|regex:/^\d*(\.\d{1,2})?$/',
            'image' => 'nullable|image',
            'category_id' => 'required|integer'
        ];
    }
}
