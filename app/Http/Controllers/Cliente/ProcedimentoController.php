<?php

// namespace App\Http\Controllers\Cliente;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

// class ProcedimentoController extends Controller
// {
//     public function index()
//     {
//         return view('procedimento.index');
//     }
// }


namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProcedimentoController extends Controller
{
    public function index()
    {
        return view('cliente.procedimento.index');
    }

    public function show($slug)
    {
        return view('cliente.procedimento.show', compact('slug'));
    }
}