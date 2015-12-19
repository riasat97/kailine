<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class UsersController extends Controller
{

    protected $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }

    public  function getRegister(){
       return view('users.register');
   }

    public  function postRegister(CreateUserRequest $request){

        $this->user->name=Input::get('name');
        $this->user->email=Input::get('email');
        $this->user->address=Input::get('address');
        $this->user->mobile=Input::get('mobile');
        $this->user->occupation=Input::get('occupation');
        $this->user->relation=Input::get('relation');
        $image=$this->postUploadImage();
        $this->user->image=$image;
        $this->user->save();

        flash()->overlay('You have registered!', 'Good Job');

        return Redirect::route('register');
    }

    private function postUploadImage()
    {
        if (Input::hasFile('image')) {
            $destinationPath = public_path() .'/uploads';

            $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
            Input::file('image')->move($destinationPath, $fileName);
            return $fileName;
        }
    }

    public function getParticipants(){
        $users=$this->user->all();
        dd($users);
        return view('');
    }
}
