<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
        return Validator::make($data, [
		'title'	=> 'required|max:255',
		'description' => 'required',
		'type' => 'required',
		'goal' => 'required',
		'location' => 'required|max:255',
		'author' => 'required',
		'tag' => 'required',
        ]);
    }
}
