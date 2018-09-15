<?php

namespace App\Http\Requests\Api;

class WeappAuthorizationRequest extends FormRequest
{
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
            'code' => 'required|string',
        ];
    }
}