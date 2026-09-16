<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreLawCaseRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'case_number' => 'required|string|max:255',
        'client_name' => 'required|string|max:255',
        'case_title' => 'required|string|max:255',
        'case_category' => 'required|string|max:255',
        'court_name' => 'required|string|max:255',
        'lawyer_name' => 'required|string|max:255',
        'case_date' => 'required|date',
        'case_description' => 'required|string|max:2000',
         ];
    }
}
