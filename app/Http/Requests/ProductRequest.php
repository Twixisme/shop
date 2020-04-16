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
        $rules = [
            'name' => 'required|min:3|max:50|unique:products,name',
            'about' => 'required|min:3|max:255',
            'price' => 'required|numeric|min:1',
            'count' => 'required|numeric|min:0'
        ];
         if ($this->route()->named('products.update')) {
            $rules['name'] .= ',' . $this->route()->parameter('product')->id;
        }
        return $rules;
    }
    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязательно для заполнения',
            'min' => 'Поле :attribute должно содержать минимум :min символов',
            'max' => 'Поле :attribute должно содержать максимум :max символов',
        ];
    }
}
