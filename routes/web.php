<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Middleware\LogAcessoMiddleware;

// Route::prefix('/home')->group(function () {

//     Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])
//         ->name('home.index');

// });

// Route::prefix('/procedimento')->group(function () {

//     Route::get('/index', [App\Http\Controllers\ProcedimentoController::class, 'index'])
//         ->name('procedimento.index');

//     Route::get('/{slug}', [App\Http\Controllers\ProcedimentoController::class, 'show'])
//         ->name('procedimentos.show');

// });

// Route::prefix('/vitrine')->group(function () {

//     Route::get('/index', [App\Http\Controllers\VitrineController::class, 'index'])
//         ->name('vitrine.index');

// });

// Route::prefix('/perfil')->group(function () {

//     Route::get('/index', [App\Http\Controllers\PerfilController::class, 'index'])
//         ->name('perfil.index');


//     Route::get(
//         '/index',
//         [App\Http\Controllers\PerfilController::class, 'index']
//     )->name('perfil.index');

//     Route::get('/perfil/anamnese', [FichaController::class, 'index'])
//     ->name('perfil.anamnese.index');


//     Route::put(
//         '/atualizar',
//         [App\Http\Controllers\PerfilController::class, 'atualizar']
//     )->name('perfil.atualizar');

// });
// use App\Http\Controllers\FichaController;

// Route::get(
//     '/ficha',
//     [FichaController::class, 'index']
// )->name('ficha.index');


// Route::post(
//     '/ficha/salvar',
//     [FichaController::class, 'salvar']
// )->name('ficha.salvar');


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProcedimentoController;
use App\Http\Controllers\VitrineController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\FichaController;

use App\Http\Middleware\LogAcessoMiddleware;


/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/

Route::prefix('/home')->group(function () {

    Route::get('/index', [HomeController::class, 'index'])
        ->name('home.index');

});


/*
|--------------------------------------------------------------------------
| PROCEDIMENTOS
|--------------------------------------------------------------------------
*/

Route::prefix('/procedimento')->group(function () {

    Route::get('/index', [ProcedimentoController::class, 'index'])
        ->name('procedimento.index');

    Route::get('/{slug}', [ProcedimentoController::class, 'show'])
        ->name('procedimentos.show');

});


/*
|--------------------------------------------------------------------------
| VITRINE
|--------------------------------------------------------------------------
*/

Route::prefix('/vitrine')->group(function () {

    Route::get('/index', [VitrineController::class, 'index'])
        ->name('vitrine.index');

});


/*
|--------------------------------------------------------------------------
| PERFIL
|--------------------------------------------------------------------------
*/


Route::prefix('/perfil')->group(function () {

    Route::get('/index', [PerfilController::class, 'index'])
        ->name('perfil.index');

    Route::get('/anamnese', [FichaController::class, 'index'])
        ->name('perfil.anamnese.index');

    Route::post('/anamnese/salvar', [FichaController::class, 'salvar'])
        ->name('perfil.anamnese.salvar');

    Route::put('/atualizar', [PerfilController::class, 'atualizar'])
        ->name('perfil.atualizar');

});



