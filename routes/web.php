<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProcedimentoController;
use App\Http\Controllers\VitrineController;



use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\Admin\ProcedimentoController as AdminProcedimentoController;
use App\Http\Controllers\Auth\CadastroController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Cliente\ProcedimentoController as ClienteProcedimentoController;
use App\Http\Controllers\Cliente\VitrineController as ClienteVitrineController;
use App\Http\Controllers\Cliente\FichaController;
use App\Http\Controllers\Cliente\PerfilController as ClientePerfilController;
use App\Http\Controllers\Cliente\AgendamentoController;

Route::prefix('/home')->group(function () {
    Route::get('/index',[App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
});

Route::get('/procedimento/index', [ClienteProcedimentoController::class,'index'])->name('procedimento.index');

Route::prefix('/vitrine')->group(function () {
    Route::get('/index', [ClienteVitrineController::class,'index'])->name('vitrine.index');});


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


// Route::prefix('/perfil')->group(function () {

//     Route::get('/index', [PerfilController::class, 'index'])
//         ->name('perfil.index');

//     Route::get('/anamnese', [FichaController::class, 'index'])
//         ->name('perfil.anamnese.index');



//     Route::put('/atualizar', [PerfilController::class, 'atualizar'])
//         ->name('perfil.atualizar');

// });
Route::middleware('auth')->prefix('cliente')->name('cliente.')->group(function () {

        Route::get('/perfil', [ClientePerfilController::class,'show'])->name('perfil.show');
        Route::get('/perfil/editar', [ClientePerfilController::class,'edit'])->name('perfil.edit');
        Route::put('/perfil', [ClientePerfilController::class,'update'])->name('perfil.update');
        Route::put('/perfil/senha', [ClientePerfilController::class,'updatePassword'])->name('perfil.password');  
        Route::get('/perfil/anamnese',[FichaController::class, 'index'])->name('perfil.anamnese.index');
        Route::post('/perfil/anamnese',[FichaController::class, 'store'])->name('perfil.anamnese.store');
        Route::put('/perfil/anamnese',[FichaController::class, 'update'])->name('perfil.anamnese.update');
        Route::get('/perfil/anamnese/editar',[FichaController::class, 'edit'])->name('perfil.anamnese.edit');
        Route::delete('/perfil/anamnese',[FichaController::class, 'destroy'])->name('perfil.anamnese.destroy');
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

