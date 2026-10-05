<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeConfig;

class HomeController extends Controller
{
    public function index()
    {
        $home = HomeConfig::first();

        return view('home.index', compact('home'));
    }
}