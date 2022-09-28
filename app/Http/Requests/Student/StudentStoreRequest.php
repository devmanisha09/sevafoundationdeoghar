<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class StudentStoreRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'roll_number' => 'required|numeric|unique:students',
            'phone' => 'required|numeric|unique:students',
            'email' => 'required|email|unique:users',
            'class_id' => 'required|numeric',
            'session' =>'required',
            'division' =>'required',
            'gender' => 'in:male,female,other',
            'age' => 'numeric|min:1',
            'date_of_birth' => 'nullable|date',
            'address' => 'nullable|string|max:255',
        ];
    }
}
