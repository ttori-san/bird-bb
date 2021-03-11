<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LetterRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'letter_image' => 'file|image|max:30000|present|nullable|sometimes|mimes:jpeg,png',
            'name' => 'required|max:20',
            'place'=> 'required|max:200',
            'date' => ' present|sometimes|nullable',// date_format:Y-m-d H:i
            'comment' => 'max:500|nullable',
        ];
    }

    public function attributes()
{
    return [
        'name' => '鳥種',
        'place' => '場所',
        'date' => '日時',
        'comment' => 'コメント',
    ];
}
}
