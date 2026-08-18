<?php

// namespace App\Http\Controllers\Cliente;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

// class VitrineController extends Controller
// {
//     public function index()
//     {
//         $vitrine = Vitrine::all();

//         return view('vitrine.index', compact('vitrine'));
//     }
// }


namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Vitrine;
use Illuminate\Http\Request;

class VitrineController extends Controller
{
    public function index()
    {
        $vitrine = Vitrine::all();

        return view('vitrine.index', compact('vitrine'));
    }
}