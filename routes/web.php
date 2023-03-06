<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ImoveisController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\AuthLogin;
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


//Rotas - Autenticação
Route::get('/login', [UserController::class, 'login'])->name("auth.login");
Route::post('/auth', [UserController::class, 'auth'])->name("auth.user");
Route::get('/logout', [UserController::class, 'logout'])->name("auth.logout");

Route::group(['middleware' => ['auth-login']], function () {
  Route::get('/imoveis/index', [ImoveisController::class, 'index'])->name('imoveis.index');
    Route::get('/imoveis/criar', [ImoveisController::class, 'criar'])->name('imoveis.criar');
    Route::post('/imoveis/salvar', [ImoveisController::class, 'salvar'])->name('imoveis.salvar');
    Route::get('/imoveis/visualizar/{id}', [ImoveisController::class, 'visualizar'])->name('imoveis.visualizar');
    Route::get('/imoveis/editar/{id}', [ImoveisController::class, 'editar'])->name('imoveis.editar');
    Route::put('/imoveis/atualizar/{id}', [ImoveisController::class, 'atualizar'])->name('imoveis.atualizar');
    Route::delete('/imoveis/deletar/{id}', [ImoveisController::class, 'deletar'])->name('imoveis.deletar');
    Route::get('/', [ImoveisController::class, 'index']);
    Route::get('/tipos/usos/{id}', [ImoveisController::class, 'UsosTipos']);
});
