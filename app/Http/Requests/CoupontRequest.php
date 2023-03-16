<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoupontRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'coupont_code' => 'required|string|unique:couponts|max:8|min:7',
            'discount' => 'required|integer|between:1,100',
            'expired_at' => 'required|date|after:today',
        ];
    }
}
