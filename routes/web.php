<?php

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

    Route::view('dashboard','dashboard')->name('home');

    Route::prefix('configuracoes')->group(function () {
        Route::get('perfil', [PerfilController::class, 'index'])->name('configuracoes.perfil');
    });

});
