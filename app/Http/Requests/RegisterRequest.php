<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
      return [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
      ];
    }

  public function messages() {
    return [
      'first_name.required' => 'Please enter your first name',
      'last_name.required' => 'Please enter your last name',
      'email.unique' => 'This email is already registered',
      'password.required' => 'Please enter a password',
      'password.confirmed' => 'Passwords do not match',
      'password.min' => 'Password must be at least 8 characters',
    ];
  }
}
