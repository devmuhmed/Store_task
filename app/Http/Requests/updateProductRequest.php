<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:70',
            'description' =>'required|min:4|max:255',
            'active' => 'required',
            'slug' => 'required|string',
            'type' => 'required',
            'stock' => 'required',
            // 'verified' => $this->verified,
            // 'featured' => $this->featured,
            'user_id' => 'required',
            'category_id' => 'required',
            'game_id' => 'required',
        ];
    }
}
