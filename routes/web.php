<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;

use App\Http\Controllers\Admin\ProcedimentoController as AdminProcedimentoController;
use App\Http\Controllers\Cliente\ProcedimentoController;
use App\Http\Middleware\LogAcessoMiddleware;

use App\Http\Controllers\Auth\CadastroController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Cliente\FichaController;
use App\Http\Controllers\Cliente\PerfilController as ClientePerfilController;
use App\Http\Controllers\Cliente\AgendamentoController as ClienteAgendamentoController;
use App\Http\Controllers\Admin\AgendamentoController as AdminAgendamentoController;
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Cliente\VitrineController as ClienteVitrineController;
use App\Http\Controllers\Admin\VitrineController as AdminVitrineController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\AnamneseController;
use App\Http\Controllers\Admin\FotoAcompanhamentoController;

use App\Http\Controllers\Cliente\FavoritoController;


Route::prefix('/home')->group(function () {
    Route::get('/index',[App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
});

Route::get('/procedimento/index', [ProcedimentoController::class,'index'])->name('procedimento.index');





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

        Route::get('/procedimento/{id}', [ProcedimentoController::class,'detalhe'])->name('procedimento.detalhe');

});


Route::get('/vitrine',[ClienteVitrineController::class, 'index'])->name('vitrine.index');

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
        Route::get('/agendamentos/horarios-disponiveis', [ClienteAgendamentoController::class,'horariosDisponiveis'])->name('agendamentos.horarios');
        Route::get('/agendamentos', [ClienteAgendamentoController::class,'index'])->name('agendamentos.index');
        Route::get('/agendamentos/criar', [ClienteAgendamentoController::class,'create'])->name('agendamentos.create');
        Route::post('/agendamentos', [ClienteAgendamentoController::class,'store'])->name('agendamentos.store');
        Route::patch('/agendamentos/{agendamento}/cancelar', [ClienteAgendamentoController::class,'cancelar'])->name('agendamentos.cancelar');

        Route::post('/favoritos/{procedimento}', [FavoritoController::class, 'toggle'])
        ->name('favoritos.toggle');

    Route::get('/favoritos', [FavoritoController::class, 'index'])
        ->name('favoritos.index');
});



      
// Procedimentos(admin)
Route::prefix('admin')->name('admin.')->group(function () {
    
         Route::get('/home', [AdminHomeController::class, 'index'])->name('home');
        Route::resource('procedimentos',AdminProcedimentoController::class);
        Route::resource('vitrine',AdminVitrineController::class);
        Route::get('/agenda',[AgendaController::class, 'index'])->name('agenda.index');
        Route::get('/agenda/eventos',[AgendaController::class, 'eventos'])->name('agenda.eventos');
        Route::post('/agenda/compromissos',[AgendaController::class, 'store'])->name('agenda.store');
        Route::delete('/agenda/compromissos/{compromisso}',[AgendaController::class, 'destroy'])->name('agenda.destroy');

    Route::get('/clientes',[ClienteController::class, 'index'])->name('clientes.index');

    Route::get('/clientes/{cliente}',[ClienteController::class, 'show'])->name('clientes.show');
    Route::get('/clientes/{cliente}/anamnese',[AnamneseController::class,'edit'] )->name('clientes.anamnese.edit');
    Route::put('/clientes/{cliente}/anamnese',[AnamneseController::class, 'update'])->name('clientes.anamnese.update');
    Route::get('/clientes/{cliente}/fotos/create',[FotoAcompanhamentoController::class, 'create'])->name('clientes.fotos.create');
    Route::post('/clientes/{cliente}/fotos',[FotoAcompanhamentoController::class, 'store'])->name('clientes.fotos.store');
    Route::delete('/clientes/fotos/{foto}',[FotoAcompanhamentoController::class, 'destroy'])->name('clientes.fotos.destroy');
    Route::get('/clientes/{cliente}/anamnese',[AnamneseController::class, 'index'])->name('clientes.anamnese.index');
    Route::get('/clientes/{cliente}/anamnese/edit',[AnamneseController::class, 'edit'])->name('clientes.anamnese.edit_anamnese');
    Route::put('/clientes/{cliente}/anamnese',[AnamneseController::class, 'update'])->name('clientes.anamnese.update');

    Route::patch(
        '/agendamentos/{agendamento}/status',
        [AdminAgendamentoController::class, 'updateStatus']
    )->name('agendamentos.status');
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

