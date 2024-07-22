<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\Utilities\HandleJsonValidation;

class LoginRequest extends FormRequest
{
    use HandleJsonValidation;
    
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Validate the login request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email:dns',
            'password' => 'required|string'
        ];
    }

    /**
     * Returns an array of attribute names and their corresponding display names for the login form.
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'email' => 'Email',
            'password' => 'Password'
        ];
    }
}
