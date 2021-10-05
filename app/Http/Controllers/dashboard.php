<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function index(){
        return view("dashboard");
    }

    public function assets(){
        return view('assets');
    }

    public function liabalities(){
        return view('liabalities');
    }

    public function login(){
        return view('login');
    }

}
