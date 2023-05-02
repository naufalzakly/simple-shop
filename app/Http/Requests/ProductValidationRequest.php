<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductValidationRequest extends FormRequest
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
            'name' => 'required|unique:products,name|string|max:255',
            'price' => 'required|numeric',
            'stocks' => 'required|numeric',
            'photo' => 'required|mimes:png,jpg',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Nama produk harus diisi',
            'name.unique' => 'Nama produk harus unik',
            'name.max' => 'Nama produk maksimal 255 karakter',
            'price.required' => 'Harga harus diisi',
            'price.numeric' => 'Harga harus berupa angka',
            'stocks.required' => 'Stok harus diisi',
            'stocks.numeric' => 'Stok harus berupa angka',
            'photo.required' => 'Foto harus diisi',
            'photo.mimes' => 'Foto harus berupa format png, jpg',
        ];
    }
}
