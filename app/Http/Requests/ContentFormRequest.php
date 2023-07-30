<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentFormRequest extends FormRequest
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
            'name'=>'required|string|min:5',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ];
    }
    public function messages(): array
    {
        return [
            'name'=>'isim alanı boş bırakılamaz.',
        ];
    }
}
