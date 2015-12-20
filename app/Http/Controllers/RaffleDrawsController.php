<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;

class RaffleDrawsController extends Controller
{

    protected $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return view('raffleDraws.index');
    }

    public function getDrawResult()
    {
       $userId = $this->getRandomUserId();
       $user = $this->getUser($userId);
       $user['profileImage']= URL::asset('uploads/'.$user->image);
        $response = array(
            'status' => true,
            'user' => $user,
        );
        return Response::json( $response );
    }

    private function getRandomUserId()
    {
        $firstUser = $this->getUserId();
        $lastUser = $this->getUserId('desc');
        $userId = rand($firstUser, $lastUser);
        return $userId;
    }

    private function getUserId($sort='asc')
    {
      return  $this->user
        ->orderBy('id',$sort)
        ->first()
        ->id;

    }

    private function getUser($userId)
    {
       do{
           $user = $this->user->find($userId);
       }while(!$user);
      return $user;


    }


}
