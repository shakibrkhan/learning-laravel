<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function loginform()
    {
    	return view('login');
    }

    public function submitlogin(Request $request)
    {
    	dd($request->all());
    	// dd($request->exampleInputEmail1);
    }

    public function registrationform()
    {
    	return view('registration');
    }
}