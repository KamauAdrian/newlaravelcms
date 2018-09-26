<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationsController extends Controller
{
    //
    public function create(){

        return view('sessions.register');

    }
    public function store(){

      //  dd(\request())
//    validate the form
        $this->validate(request(),[
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed'
        ]);

        //create and save the user
    $user = User::create(request(['name','email','password']));


    //sign the user in
    auth()->login($user);

        //redirect the user to the home page
    return redirect()->home();

    }
}
