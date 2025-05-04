<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
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
            "name"=> "required|max:200",
            "email"=> "required|max:200|email|unique:users,email",
            "password"=> ['required','max:200','confirmed',Password::min(8)->letters()->numbers()],
            "amount" => "required|min:1|numeric"
        ];
    }
}
