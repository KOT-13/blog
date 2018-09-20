<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreUserRequest
 * @package App\Http\Requests
 */
class StoreUserRequest extends FormRequest
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
            'name' => 'required|min:3|max:30',
            'email' => 'required|email',
        ];

        switch (true) {
            case \in_array($this->getMethod(), ['PUT', 'PATCH']):
                $rules['password'] = 'nullable|confirmed|min:6|max:16';
                break;
            case $this->getMethod() === 'POST':
                $rules['password'] = 'required|confirmed|min:6|max:16';
                break;
        }

        return $rules;
    }
}
