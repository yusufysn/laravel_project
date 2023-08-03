<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'property_name'=>'required',
            'property_type'=>'required|in:text,check,radio',
            'category_id'=>'exists:\App\Models\Category,id'
        ];
    }

    public function messages()
    {
        return [
            'required'=>':attribute zorunludur.',
            'exists'=>':attribute bulunamadı',
            'in'=>"lütfen :attribute text,radio yada check değerlerinden biri olmalıdır. "
        ];
    }


    public function attributes()
    {
        return [
            'property_name'=>'Özellik adı',
            'property_type'=>'Özellik tipi',
            'category_id'=>'Kategori'
        ];
    }

}



