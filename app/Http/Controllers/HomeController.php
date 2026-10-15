<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeConfig;

class HomeController extends Controller
{
   
public function index()
{
    $home = \App\Models\HomeConfig::first();

    if (!$home) {
        $home = new \App\Models\HomeConfig();

        $home->banner_1 = '';
        $home->banner_2 = '';
        $home->banner_3 = '';
    }

    return view('home.index', compact('home'));
}

}