<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePropertyRequest extends FormRequest
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
            'name'        => ['required', 'string', 'min:1', 'max:191'],
            'no_of_rooms' => ['nullable', 'integer'],
            'address'     => ['nullable', 'string', 'min:1', 'max:191'],
            'city'        => ['nullable', 'string', 'min:1', 'max:80'],
            'state'       => ['nullable', 'string', 'min:1', 'max:80'],
            'image'       => ['nullable', 'image', 'mimes:jpeg,jpg,JPG,png,webp,svg'],
            'doc_image'   => ['nullable', 'image', 'mimes:jpeg,jpg,JPG,png,webp,svg'],
            'description' => ['nullable', 'string'],
            'type'        => ['required'],
            'is_active'   => ['nullable', 'boolean'],
        ];
    }
}
