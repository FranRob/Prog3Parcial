<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
            'year' => 'required|integer',
            'dni' => 'required|integer|unique:students,dni,' . $this->route('student')->id,
            'name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'cluster' => 'required|string',
            'birthday' => 'required|date|before_or_equal:' . now()->subYears(18)->format('Y-m-d'),
        ];
    }
    
    
}
