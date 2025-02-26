<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => "required|string",
            'fullname' => "required|string",
            'email' => "required|string|email|unique:users",
            'role' => "required|integer"
        ];
    }

    public function messages()
    {
        return [
            "name.required" => 'Это поле необходимо для заполнения',
            "name.string" => 'Данные должны соответствовать строчному типу',
            "role.required" => 'Это поле необходимо для заполнения',
            "role.integer" => 'Данные должны соответствовать числу',
            "fullname.required" => 'Это поле необходимо для заполнения',
            "fullname.string" => 'Данные должны соответствовать строчному типу',
            "email.required" => 'Это поле необходимо для заполнения',
            "email.string" => 'Данные должны соответствовать строчному типу',
            "email.email" => 'Некорректный email',
            "email.unique" => 'Пользователь с таким email уже существует'
        ];
    }
}
