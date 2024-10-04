<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JournalRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'issn_no' => 'required|string|max:255',
            'is_active' => 'nullable',
            'description' => 'required|string',
            'acceptance_rate' => 'required',
            'submission_to_final_decision' => 'required',
            'acceptance_to_publication' => 'required',
            'dio_prefix' => 'required',
            'publishing_model' => 'required',
            'journal_category' => 'required',
            'image' => 'required',
        ];
    }
}
