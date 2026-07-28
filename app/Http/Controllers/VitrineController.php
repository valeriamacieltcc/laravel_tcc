<?php

namespace App\Http\Controllers;

use App\Models\Vitrine;

class VitrineController extends Controller
{
    public function index()
    {
        $vitrine = Vitrine::all();

        return view('vitrine.index', compact('vitrine'));
    }
}