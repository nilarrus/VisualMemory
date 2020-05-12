<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function getLogin(){
        return view('blocks.login');
    }
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
