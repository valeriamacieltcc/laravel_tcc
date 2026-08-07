<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Middleware\LogAcessoMiddleware;






// Route::prefix('/home')->group(function(){
//     Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
//     // Route::post('/add', [App\Http\Controllers\AlunoController::class, 'add'])->name('aluno.add');
//     // Route::post('/remove', [App\Http\Controllers\AlunoController::class, 'remove'])->name('aluno.remove');
//     // Route::post('/edit', [App\Http\Controllers\AlunoController::class, 'edit'])->name('aluno.edit');
//     // Route::get('/list', [App\Http\Controllers\AlunoController::class, 'list'])->name('aluno.list');
// }); 


// Route::prefix('/procedimento')->group(function(){

//     Route::get('/index', [App\Http\Controllers\ProcedimentoController::class, 'index'])->name('procedimento.index');
// });

// Route::prefix('/vitrine')->group(function(){

//     Route::get('/index', [App\Http\Controllers\VitrineController::class, 'index'])->name('vitrine.index');
// });

// Route::prefix('/perfil')->group(function(){

//     Route::get('/index', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil.index');
// });


use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;

Route::prefix('/home')->group(function () {

    Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])
        ->name('home.index');

});

Route::prefix('/procedimento')->group(function () {

    Route::get('/index', [App\Http\Controllers\ProcedimentoController::class, 'index'])
        ->name('procedimento.index');

    Route::get('/{slug}', [App\Http\Controllers\ProcedimentoController::class, 'show'])
        ->name('procedimentos.show');

});

Route::prefix('/vitrine')->group(function () {

    Route::get('/index', [App\Http\Controllers\VitrineController::class, 'index'])
        ->name('vitrine.index');

});

Route::prefix('/perfil')->group(function () {

    Route::get('/index', [App\Http\Controllers\PerfilController::class, 'index'])
        ->name('perfil.index');


    Route::get(
        '/index',
        [App\Http\Controllers\PerfilController::class, 'index']
    )->name('perfil.index');

    Route::get('/perfil/anamnese', [FichaController::class, 'index'])
    ->name('perfil.anamnese.index');


    Route::put(
        '/atualizar',
        [App\Http\Controllers\PerfilController::class, 'atualizar']
    )->name('perfil.atualizar');

});
use App\Http\Controllers\FichaController;

Route::get(
    '/ficha',
    [FichaController::class, 'index']
)->name('ficha.index');


Route::post(
    '/ficha/salvar',
    [FichaController::class, 'salvar']
)->name('ficha.salvar');

