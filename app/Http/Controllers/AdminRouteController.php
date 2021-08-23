<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRouteController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function register(){
        return view('admin.register');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
}
