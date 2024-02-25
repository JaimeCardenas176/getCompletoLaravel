<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Product extends Controller
{
    //

    //GET
    public function getProducts(){

        return "/products/get responde";
    }

    //GET
    public function getCategories(){

        return "/categories/get responde";
    }

    //POST
    public function search(){

        return "/search responde";
    }
}
