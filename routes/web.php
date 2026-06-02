<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;






Route::prefix('/home')->group(function(){
    Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
    // Route::post('/add', [App\Http\Controllers\AlunoController::class, 'add'])->name('aluno.add');
    // Route::post('/remove', [App\Http\Controllers\AlunoController::class, 'remove'])->name('aluno.remove');
    // Route::post('/edit', [App\Http\Controllers\AlunoController::class, 'edit'])->name('aluno.edit');
    // Route::get('/list', [App\Http\Controllers\AlunoController::class, 'list'])->name('aluno.list');
}); 


Route::prefix('/procedimento')->group(function(){

    Route::get('/index', [App\Http\Controllers\ProcedimentoController::class, 'index'])->name('procedimento.index');

});