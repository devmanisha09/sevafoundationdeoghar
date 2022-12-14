<?php

namespace App\Http\Requests\Student;

use App\AllParent;
use App\Student;
use Illuminate\Foundation\Http\FormRequest;

class StudentUpdateRequest extends FormRequest
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
        $current_user = Student::find($this->student);

        return [
            'name' => 'required|string|max:255',
            'roll_number' => 'required|numeric|unique:students,roll_number,'. $this->student,
            'phone' => 'required|numeric|unique:students,phone,'. $this->student,
            'email' => 'required|email|unique:users,email,'. $current_user->user_id,
            'class_id' => 'required|numeric',
            'gender' => 'in:male,female,other',
            'session' =>'required',
            'division' =>'required',
            'age' => 'numeric|min:1',
            'date_of_birth' => 'nullable|date',
            'address' => 'nullable|string|max:255',
        ];
    }
}
