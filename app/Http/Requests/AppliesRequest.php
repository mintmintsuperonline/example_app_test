<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppliesRequest extends FormRequest
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
            'name' => 'required|unique:applies,name',
            'address' => 'required',
            // 'telephone'=>'required|digits:10'
        ];
    }


    public function messages(): array
    {
        return [
            'name.required' => 'Please Enter name',
            'name.unique' => 'Category name have exist , Please enter another name',
            'address.required'=>'Please enter Address',
            // 'telephone.required'=>'Please enter Phone with 10 number begin with 0'

        ];
    }
}
