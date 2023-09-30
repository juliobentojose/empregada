<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmpregadaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ReclamacaoController;
use App\Http\Controllers\UserController;
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
    return redirect()->route('inicio.index');
});
require __DIR__.'/auth.php';
Route::resource('/login',loginController:: class);
Route::resource('/inicio',InicioController:: class);
Route::resource('/regitar',UserController:: class);
Route::resource('/enviar', PedidoController::class);
Route::resource('/reclamacao', ReclamacaoController::class);
Route::get('/Empregada/{id}',[EmpregadaController::class, 'verEmpregada'])->name('verEmpregada');


 
Route::middleware(['auth'])->group(function () {
    Route::resource('/paginaInicial', EmpregadaController::class);
    Route::resource('/alterar', EmpregadaController::class);
    Route::resource('/pedido', PedidoController::class);
    Route::resource('/perfil', UserController::class);
    Route::GET('/empregada',[AdminController::class, 'empregada'])->name('empregada');
    Route::GET('/deletar',[AdminController::class, 'deletarEmpregada'])->name('deletarEmpregada');
    Route::GET('/Pedidos',[AdminController::class, 'verPedidos'])->name('verPididos');
    Route::GET('/Reclamacoes',[AdminController::class, 'verReclamacoes'])->name('verReclamacoes');
    Route::GET('/Admin',[AdminController::class, 'verPefil'])->name('verPerfil');
    Route::Post('/EditarPerfilAdmin',[AdminController::class, 'alterarPefil'])->name('alterarPefil');
    
   
    //
    
});


