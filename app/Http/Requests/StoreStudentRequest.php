<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
        return match($this->method())
        {
            'POST' => [
                'year' => 'required|integer|min:1|max:3',
                'dni' => 'required|integer|min:10000000|max:99999999',
                'name' => 'required|string|max:50',
                'last_name' => 'required|string|max:50',
                'cluster' => 'required|string|max:1',
                'birthday' => 'required|date|before_or_equal:' .now()->subYears(18)->format('d-m-Y'),

            ],
            'PUT' => [
                'year' => 'required|integer',
                'dni' => 'required|integer|unique:students,dni,'.$this->student->id,
                'name' => 'required|string|max:250',
                'last_name' => 'required|string|max:250',
                'cluster' => 'required|string',
                'birthday' => 'required|date|before_or_equal:' .now()->subYears(18)->format('d-m-Y'),

            ]
        };
    }
}
