<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SajadaBerdasiController extends Controller
{
    public function index()
    {
        return view('pages.sajada-berdasi.index');
    }
}
