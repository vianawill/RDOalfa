<?php

use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaoObraController;
use App\Http\Controllers\NotificacoesController;
use App\Http\Controllers\ObraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RdoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Auth::routes(); //protege todas as rotas

Route::middleware(['auth'])->group(function() {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('users', UserController::class);
    Route::resource('rdos', RdoController::class);
    Route::resource('obras', ObraController::class);
    Route::resource('equipamentos', EquipamentoController::class);
    Route::resource('mao_obras', MaoObraController::class);
    Route::resource('notificacoes', NotificacoesController::class);

// Nova rota dentro do grupo auth
Route::get('/rdos/create', function () {
    return view('rdos.create'); // View específica
})->name('rdos.create'); // Nome opcional para facilitar chamadas no Blade

});