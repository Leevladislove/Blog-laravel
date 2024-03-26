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
        // $data = $request->all();
        // $name = $request->has('name');
        // $name = $request->filled('name');
        // $name = $request->missing('name');

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $agreement = !! $request->agreement;

        dd($name, $email, $password, $agreement);
    }
}
