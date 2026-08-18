<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| CONTROLLERS PRINCIPAIS
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProcedimentoController;
use App\Http\Controllers\VitrineController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\FichaController;


/*
|--------------------------------------------------------------------------
| CONTROLLERS ADMIN
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Admin\ProcedimentoController as AdminProcedimentoController;


/*
|--------------------------------------------------------------------------
| CONTROLLERS AUTH
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Auth\CadastroController;
use App\Http\Controllers\Auth\LoginController;


/*
|--------------------------------------------------------------------------
| CONTROLLERS CLIENTE
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Cliente\ProcedimentoController as ClienteProcedimentoController;
use App\Http\Controllers\Cliente\VitrineController as ClienteVitrineController;
use App\Http\Controllers\Cliente\PerfilController as ClientePerfilController;
use App\Http\Controllers\Cliente\AgendamentoController;


/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/

Route::prefix('home')->group(function () {

    Route::get('/index', [HomeController::class, 'index'])
        ->name('home.index');

});


/*
|--------------------------------------------------------------------------
| PROCEDIMENTOS - CLIENTE
|--------------------------------------------------------------------------
|
| Página pública de procedimentos.
|
*/

Route::get(
    '/procedimento/index',
    [ClienteProcedimentoController::class, 'index']
)->name('procedimento.index');


/*
|--------------------------------------------------------------------------
| VITRINE - CLIENTE
|--------------------------------------------------------------------------
|
| Página pública da vitrine.
|
*/

Route::get(
    '/vitrine/index',
    [ClienteVitrineController::class, 'index']
)->name('vitrine.index');


/*
|--------------------------------------------------------------------------
| PERFIL
|--------------------------------------------------------------------------
*/

Route::prefix('perfil')->group(function () {

    Route::get(
        '/index',
        [PerfilController::class, 'index']
    )->name('perfil.index');


    /*
    | Anamnese
    */

    Route::get(
        '/anamnese',
        [FichaController::class, 'index']
    )->name('perfil.anamnese.index');


    Route::post(
        '/anamnese/salvar',
        [FichaController::class, 'salvar']
    )->name('perfil.anamnese.salvar');


    /*
    | Atualizar perfil
    */

    Route::put(
        '/atualizar',
        [PerfilController::class, 'atualizar']
    )->name('perfil.atualizar');

});


/*
|--------------------------------------------------------------------------
| ÁREA DO CLIENTE
|--------------------------------------------------------------------------
*/

Route::middleware('auth')
    ->prefix('cliente')
    ->name('cliente.')
    ->group(function () {


        /*
        |--------------------------------------------------------------------------
        | PERFIL DO CLIENTE
        |--------------------------------------------------------------------------
        */

        Route::get(
            '/perfil',
            [ClientePerfilController::class, 'show']
        )->name('perfil.show');


        Route::get(
            '/perfil/editar',
            [ClientePerfilController::class, 'edit']
        )->name('perfil.edit');


        Route::put(
            '/perfil',
            [ClientePerfilController::class, 'update']
        )->name('perfil.update');


        Route::put(
            '/perfil/senha',
            [ClientePerfilController::class, 'updatePassword']
        )->name('perfil.password');


        /*
        |--------------------------------------------------------------------------
        | AGENDAMENTOS
        |--------------------------------------------------------------------------
        */

        Route::get(
            '/agendamentos/horarios-disponiveis',
            [AgendamentoController::class, 'horariosDisponiveis']
        )->name('agendamentos.horarios');


        Route::get(
            '/agendamentos',
            [AgendamentoController::class, 'index']
        )->name('agendamentos.index');


        Route::get(
            '/agendamentos/criar',
            [AgendamentoController::class, 'create']
        )->name('agendamentos.create');


        Route::post(
            '/agendamentos',
            [AgendamentoController::class, 'store']
        )->name('agendamentos.store');


        Route::patch(
            '/agendamentos/{agendamento}/cancelar',
            [AgendamentoController::class, 'cancelar']
        )->name('agendamentos.cancelar');

    });


/*
|--------------------------------------------------------------------------
| ADMIN - PROCEDIMENTOS
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::resource(
            'procedimentos',
            AdminProcedimentoController::class
        );

    });


/*
|--------------------------------------------------------------------------
| CADASTRO E LOGIN
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {


    /*
    | Cadastro
    */

    Route::get(
        '/cadastro',
        [CadastroController::class, 'create']
    )->name('cadastro');


    Route::post(
        '/cadastro',
        [CadastroController::class, 'store']
    )->name('cadastro.store');


    /*
    | Login
    */

    Route::get(
        '/login',
        [LoginController::class, 'create']
    )->name('login');


    Route::post(
        '/login',
        [LoginController::class, 'store']
    )->name('login.store');

});


/*
|--------------------------------------------------------------------------
| LOGOUT
|--------------------------------------------------------------------------
*/

Route::post(
    '/logout',
    [LoginController::class, 'destroy']
)->middleware('auth')->name('logout');