<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreProcedureRequest extends FormRequest
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
            'type_id' => ['exists:types,id'],
            'status' => 'required|in:pending,in_progress,done',
            'employee_dni' => 'required'
        ];
    }
}