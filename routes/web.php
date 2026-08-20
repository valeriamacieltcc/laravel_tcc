<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\Admin\ProcedimentoController as AdminProcedimentoController;
use App\Http\Controllers\Auth\CadastroController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Cliente\ProcedimentoController as ClienteProcedimentoController;
use App\Http\Controllers\Cliente\VitrineController as ClienteVitrineController;
use App\Http\Controllers\Cliente\PerfilController as ClientePerfilController;
use App\Http\Controllers\Cliente\AgendamentoController;

Route::prefix('/home')->group(function () {
    Route::get('/index',[App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
});

Route::get('/procedimento/index', [ClienteProcedimentoController::class,'index'])->name('procedimento.index');
Route::get('/procedimento/{id}', [ClienteProcedimentoController::class,'detalhe'])->name('procedimento.detalhe');

Route::prefix('/vitrine')->group(function () {
    Route::get('/index', [ClienteVitrineController::class,'index'])->name('vitrine.index');});


Route::middleware('auth')->prefix('cliente')->name('cliente.')->group(function () {

        Route::get('/perfil', [ClientePerfilController::class,'show'])->name('perfil.show');
        Route::get('/perfil/editar', [ClientePerfilController::class,'edit'])->name('perfil.edit');
        Route::put('/perfil', [ClientePerfilController::class,'update'])->name('perfil.update');
        Route::put('/perfil/senha', [ClientePerfilController::class,'updatePassword'])->name('perfil.password');
    
        Route::get('/agendamentos/horarios-disponiveis', [AgendamentoController::class,'horariosDisponiveis'])->name('agendamentos.horarios');
        Route::get('/agendamentos', [AgendamentoController::class,'index'])->name('agendamentos.index');
        Route::get('/agendamentos/criar', [AgendamentoController::class,'create'])->name('agendamentos.create');
        Route::post('/agendamentos', [AgendamentoController::class,'store'])->name('agendamentos.store');
        Route::patch('/agendamentos/{agendamento}/cancelar', [AgendamentoController::class,'cancelar'])->name('agendamentos.cancelar');

    });

      
// Procedimentos(admin)
Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('procedimentos',AdminProcedimentoController::class);
    });

// cadastro e login
Route::middleware('guest')->group(function () {
Route::get('/cadastro', [CadastroController::class,'create'])->name('cadastro');
Route::post('/cadastro', [CadastroController::class,'store'])->name('cadastro.store');
Route::get('/login', [ LoginController::class,'create'])->name('login');
Route::post('/login', [LoginController::class,'store'])->name('login.store');
});

// logout
Route::post('/logout', [LoginController::class,'destroy'])->middleware('auth')->name('logout');

