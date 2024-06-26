<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
            'first_name' => 'sometimes|string|required|max:255',
            'last_name' => 'sometimes|string|required|max:255',
            'postion' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|required',
            'department_id' => 'sometiems|exists:departments,id',
        ];
    }
}
