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
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
            'secretaria' => 'required',
        ],[
            'email.required' => 'Email é obrigatório',
            'password.required' => 'Senha é obrigatória',
            'secretaria.required' => 'Secretaria é obrigatória'
        ]);

        if (Auth::attempt(['email' => $request->email, 
            'password' => $request->password,
            'secretaria' => $request->secretaria])):
    
            return redirect('/imoveis/cadastro');
        else:
             return redirect()->back()->with('danger', 'Credenciais não correspondem');
        endif;
    }
}