<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SaladRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'bail|string|min:4|required|max:30',
            'description' => 'bail|string|min:10|required|max:1024',
            'price' => 'bail|regex:/^\d+(\.\d{1,2})?$/|required',
            'image' => 'bail|image|mimes:png,jpg|required',
        ];
    }
}
