<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            "name" => "required|max:200",
            "email" => ["required", "max:200", "email", Rule::unique("users")->ignore($this->user ?: null)],
            "password" => ['nullable', 'max:200', 'confirmed', Password::min(8)->letters()->numbers()],
            "amount" => "required|min:1|numeric"
        ];
    }
}
