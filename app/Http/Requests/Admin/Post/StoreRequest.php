<?php

namespace App\Http\Requests\Admin\Post;

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
            'title' => "required|string",
            'description' => "nullable",
            'content' => "nullable",
            'tag_ids' => "nullable|array",
            'tag_ids.*' => "nullable|integer|exists:tags,id",
            'category_id' => "required|integer|exists:categories,id",
            'image_preview' => "nullable|file",
            'image' => "nullable|file"
        ];
    }

    public function messages()
    {
        return [
            "title.required" => 'Это поле необходимо для заполнения',
            "title.string" => 'Данные должны соответствовать строчному типу',
            "image.file" => 'Необходимо выбрать файл',
            "image_preview.file" => 'Необходимо выбрать файл',
            "category_id.required" => 'Это поле необходимо для заполнения',
            "category_id.integer" => 'ID категории должно быть числом',
            "category_id.exists" => 'ID категории должно соответствовать ID категории в БД',
            "tag_ids.array" => 'Необходимо отправить массив данных'
        ];
    }

}
