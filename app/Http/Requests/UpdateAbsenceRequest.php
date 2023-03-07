<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAbsenceRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'dates' => 'required|array',
            'is_approved' => 'required|boolean',
            'desc' => '',
            'employee_id' => 'required|exists:users,id',
            'approver_id' => 'required|exists:users,id',
        ];
    }
}
