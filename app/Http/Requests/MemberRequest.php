<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|unique:members,username',
            'password' => 'same:repassword',
            'repassword' => 'required',
            'fullname' => 'required',
            'email' => 'email|required|unique:members,email',
            'phone' => 'required'
        ];
    }

    public function attributes() : array
    {
        return [
            'username' => 'Username',
            'password' => 'Password',
            'repassword' => 'Repeat Password',
            'fullname' => 'Full Name',
            'email' => 'Email',
            'phone' => 'Phone'
        ];
    }
}
