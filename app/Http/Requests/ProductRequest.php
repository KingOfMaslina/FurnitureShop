<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:255', 'min:2'],
            'description' => ['required', 'min:10'],
            'image' => ['nullable', Rule::unique('products', 'image')->ignore($this->route('products'))],
            'price' => ['required'],
            'sale' => ['nullable'],
            'collection' => ['nullable'],
            'manufacturer' => ['nullable'],
            'guarantee' => ['nullable'],
            'expire' => ['nullable'],
            'size' => ['nullable'],
            'sheathing' => ['nullable'],
            'color' => ['nullable'],

        ];
    }
}
