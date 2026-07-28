<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VitrineController extends Controller
{
 use App\Models\Produto;

public function index()
{
    $produtos = Produto::orderBy('nome')->get();

    return view('vitrine.index', compact('produtos'));
}
}