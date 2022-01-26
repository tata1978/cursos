<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() //__invoke() es para administrar una unica ruta
    {
        return view('home');
    }
}
