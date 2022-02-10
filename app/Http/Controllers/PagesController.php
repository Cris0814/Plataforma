<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function inicio(){
        return view('home');
    }
    


   

}
