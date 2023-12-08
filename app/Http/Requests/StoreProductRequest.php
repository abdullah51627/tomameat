<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Helpers\ProductsHelper;

class StoreProductRequest extends FormRequest
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
            'name' => "required",
            'priority' => 'required|in:'.implode(",",ProductsHelper::getPriorities()),
            'price' => "required",
            'category' => 'required|exists:categories,id',
            'description' => "required|max:1000",
            'qty' => 'required',
            'keywords' => 'array',
        ];
    }
}
