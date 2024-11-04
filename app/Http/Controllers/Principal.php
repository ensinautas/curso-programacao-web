<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    public function contacto() {
        return view('contacto');
    }
    public function login(){
        return view('login');
    }
}
