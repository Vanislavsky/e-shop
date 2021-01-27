<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name' => 'required|min:2|max:255',
            'phone' => 'required|size:11|numeric',
        ];
    }

    public function messages()
    {
       return [
           'required' => 'Поле :attribute обязатяльно для ввода',
           'min' => 'Поле :attribute должно иметь минимум :min символов',
           'max' => 'Поле :attribute должно иметь максимум :min символов',
           'numeric' => 'В :attribute должен быть номер',
           'size' => 'номер телефона должен состоять из 11 цифр'
       ];
    }
}
