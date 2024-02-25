<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Order extends Controller
{
    //

    //GET
    public function history(){

        return "/history/get responde";
    }

    //POST
    public function createOrder(){

        return "/setOrder responde";
    }
}
