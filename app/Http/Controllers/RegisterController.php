<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function index() 
    {
        return view('register.index');
    }

    public function store(Request $request)
    {   
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $agreement = !! $request->agreement;

        dd($name, $email, $password, $agreement);
    }
}
