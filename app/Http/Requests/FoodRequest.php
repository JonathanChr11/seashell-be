<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
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
            'food_name' => 'required|string|max:255',
            'food_image' => 'required|mimes:jpg,png,jpeg',
            'food_description' => 'required|string',
            'food_price' => 'required|numeric',
            'menu_type' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return[
            'food_name.required' => 'food name must be filled',
            'food_image.file' => 'image must be file type',
            'food_image.mimes' => 'file must be jpg, png, or jpeg type',
            'food_price.numeric' => 'price must be number',
        ];
    }
}
