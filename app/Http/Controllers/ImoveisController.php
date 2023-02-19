<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImoveisController extends Controller
{
    public function __construct()
    {

    }

    public function cadastro(){

        return view('/imoveis/cadastro', [

        ]);
    }

    public function documentacao(){

        return view('/imoveis/documentacao', [

        ]);
    }

    public function baixaImobiliaria(){

        return view('/imoveis/baixaImobiliaria', [

        ]);
    }
}
