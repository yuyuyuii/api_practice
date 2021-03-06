<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    { 
      //trueにすることでformrequestが使用出来る。
      // return false;
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
          'title' => ['required', 'string', 'max:100'],
          'content' => ['required', 'string'],
        ];
    }

    public function messages()
    {
      return [
        'title.required' => 'titleを入力してください',
        'content.required'  => 'contentを入力してください',
      ];
    }
}
