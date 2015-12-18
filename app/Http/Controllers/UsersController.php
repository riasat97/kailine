<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

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

    public  function postRegister(){

        $this->user->name=Input::get('name');
        $this->user->email=Input::get('email');
        $this->user->address=Input::get('address');
        $this->user->mobile=Input::get('mobile');
        $this->user->occupation=Input::get('occupation');
        $this->user->relation=Input::get('relation');
        $this->user->save();

        flash()->overlay('You have registered!', 'Good Job');

        return Redirect::route('register');
    }
}
