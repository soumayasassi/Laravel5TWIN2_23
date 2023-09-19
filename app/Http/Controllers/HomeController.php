<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view ('welcome') ;
    }
    public function welcome()
    {
        $message =" Hello 5TWIN2" ;
        return response($message) ;
    }

    public function show()
    {

        return view('show', ["msg"=>"Home Page"]) ;
    }
    public function  trimstring()
    {
        return view('trimstring');
    }
}
