<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signUp(){
        return view('Site/Auth/register');
    }

    public function register(UserRegisterRequest $request){
        User::create();
    }
}
