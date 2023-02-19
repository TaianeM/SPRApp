<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ImoveisController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

    //Rotas - Autenticação
    Route::get('/login', [UserController::class, 'login'])->name("auth.login");
    Route::post('/auth', [UserController::class, 'auth'])->name("auth.user");

    //Rotas - Imoveis
    Route::get('/imoveis/cadastro', [ImoveisController::class, 'cadastro'])->name("imoveis.cadastro");
    Route::get('/imoveis/documentacao', [ImoveisController::class, 'documentacao'])->name("imoveis.documentacao");
    Route::get('/imoveis/baixaImobiliaria', [ImoveisController::class, 'baixaImobiliaria'])->name("imoveis.baixaImobiliaria");

