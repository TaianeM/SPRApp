<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     *
     *
     * @return \Illuminate\Http\Response
     */

    public function login()
    {
        return view('auth.login', [

        ]);
    }

    public function auth(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 
            'password' => $request->password,
            'secretaria' => $request->secretaria])):
        dd('Success');
        else:
        dd('Error');
        endif;
    }
}