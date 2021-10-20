<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PerfilController;
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


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('home');

    Route::prefix('configuracoes')->group(function () {
        Route::get('perfil', [PerfilController::class, 'index'])->name('configuracoes.perfil');
    });

    Route::prefix('cadastrar')->group(function () {
        Route::get('empresa', [EmpresaController::class, 'index'])->name('cadastro.empresa');
        Route::post('empresa', [EmpresaController::class, 'store'])->name('cadastro.empresa.store');
        Route::get('empresa/{id}', [EmpresaController::class, 'edit'])->name('cadastro.empresa.edit');
        Route::post('empresa/{id}', [EmpresaController::class, 'update'])->name('cadastro.empresa.update');
        Route::get('deletar_empresa/{id}', [EmpresaController::class, 'destroy'])->name('cadastro.empresa.destroy');
    });

});
