<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PertandinganRequest extends FormRequest
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
            'home_id' => [
                'required',
                Rule::unique('pertandingans', 'home_id')->where('away_id', $this->input('away_id'))
            ],
            'away_id' => [
                'required',
                Rule::unique('pertandingans', 'away_id')->where('home_id', $this->input('home_id'))
            ],
            'home_score' => 'required|numeric',
            'away_score' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'home_id.unique' => 'Pertandingan ini sudah ada',
            'away_id.unique' => 'Pertandingan ini sudah ada'
        ];
    }
}
