<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function welcome()
    {
        return view('welcome');
    }
    function login()
    {
        return view('login');
    }
    function register()
    {
        return view('register');
    }
}
