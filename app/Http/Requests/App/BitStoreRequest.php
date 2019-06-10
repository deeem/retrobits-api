<?php

namespace App\Http\Requests\App;

use Illuminate\Foundation\Http\FormRequest;

class BitStoreRequest extends FormRequest
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
            'game' => 'required|exists:games,id',
            'title' => 'required',
            'description' => 'required',
            'players' => 'required',
            'savefile' => 'required|file',
        ];
    }
}
