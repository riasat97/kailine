<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    protected $redirect = 'registration';
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
            'name'=>'required|max:200|min:3',
            'image'=>'required|image|mimes:jpeg,bmp,png',
            'email'=>'required|email|unique:users,email',
            'mobile'=>array('required','regex:/^([+]?88)?01[15-9]\d{8}$/'),
            'address'=>'required|max:300',
            'relation'=>'required|',
            'occupation'=>'max:500'
        ];
    }
}
