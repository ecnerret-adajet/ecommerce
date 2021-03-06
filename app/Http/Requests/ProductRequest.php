<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category-id' => 'required|integer',
            'title' => 'required|min:2',
            'description' => 'required|min:3',
            'price' => 'required|numeric',
            'availabitlity' => 'integer',
            'image' => 'required|image|mimes:jpeg,jpg,png'
        ];
    }
}
