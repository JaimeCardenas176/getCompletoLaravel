<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Cuser extends Controller
{
    //

    //POST
    public function login(){

        return "/login responde";
    }

    //POST
    public function signUp(){

        return "/signup responde";
    }

    //POST
    public function forgot(){

        return "/forgot responde";
    }

    //POST
    public function userEdit(){

        return "/user/edit responde";
    }
    
    //POST
    public function userChangePassword(){

        return "/user/changePassword responde";
    }
}
