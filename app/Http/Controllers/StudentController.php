<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function home()
    {
        return view( 'home.home' );
    }
}