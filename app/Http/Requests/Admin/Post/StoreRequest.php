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
            'description' => "",
            'content' => "",
            'tag_ids' => "nullable|array",
            'tag_ids.*' => "nullable|integer|exists:tags,id",
            'category_id' => "required|integer|exists:categories,id",
            'image_preview' => "file",
            'image' => "file"
        ];
    }
}
