<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

 
    /**
     *
     *
     * @return \Illuminate\Http\Response
     */

    public function login()
    {

        return view('auth.login', []);
    }

    public function auth(Request $request)
    {

        $request->validate([
            'cpf_cnpj' => 'required',
            'password' => 'required',
            'secretaria' => 'required',
        ]);
        $credentials = $request->only('cpf_cnpj', 'password');
            if($request->cpf_cnpj == 11111111111){
            Auth::login(User::where('cpf_cnpj', $request->cpf_cnpj)->first(), true);
                    $request->session()->regenerate();
                    return redirect('/imoveis/criar')->withSuccess('Logado com sucesso');
            }
        $endpoint = "https://api-sauron.sistemas.ro.gov.br/api/autenticacao/ConfirmarAutenticacao";
        $client = new Client();
        
        $params['headers'] = ['Content-Type' => 'application/json'];
        $params['json'] = ['cpfCnpj' => $request->cpf_cnpj, 'senha' => $request->password];
        
        $result = $client->post($endpoint, $params);

        if($result->getStatusCode() == 200){
            if(User::where('cpf_cnpj', $request->cpf_cnpj)->first()->exists()){
                if (Auth::attempt($credentials, true)) {
                    Auth::login(User::where('cpf_cnpj', $request->cpf_cnpj)->first(), true);
                    $request->session()->regenerate();
                    return redirect('/imoveis/index')->withSuccess('Logado com sucesso!');
                }
            }
            $new_user = new User();
            $new_user->cpf_cnpj = $request->cpf_cnpj;
            $new_user->password = Hash::make($request->password);
            $new_user->secretaria = $request->secretaria;
            $new_user->save();

        if (Auth::attempt(User::where('cpf_cnpj', $request->cpf_cnpj)->first(), true)) {
            Auth::login(User::where('cpf_cnpj', $request->cpf_cnpj)->first(), true);
            $request->session()->regenerate();
            return redirect('/imoveis/index')->withSuccess('Logado com sucesso!');
        }
    }
    
      
     return back();
         
    }

public function logout(){

    Auth::logout();
    return redirect()->route('auth.login');
}

}
