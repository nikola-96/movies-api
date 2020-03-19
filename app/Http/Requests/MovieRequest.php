<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                Rule::unique('movies')
                    ->where('release_date', request('release_date'))
            ],
            'director' => 'required',
            'image_url' => 'url',
            'duration' => 'required|numeric|min:1|max:500',
            'release_date' => 'required',
        ];
    }
}
