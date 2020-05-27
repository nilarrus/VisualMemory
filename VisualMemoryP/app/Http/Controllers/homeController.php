<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __contruct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('auth.login');
    }

    
    
    // controladores temporales
    public function getRegister(){
        return view('blocks.register');
    }
    public function getMenu()
    {
        return view('blocks.menu');
    }
    public function getUnPlayer()
    {
        return view('blocks.oneP');
    }
}
