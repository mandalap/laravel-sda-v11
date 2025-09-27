<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SajadaJakselController extends Controller
{
    public function index()
    {
        return view('pages.sajada-jaksel.index');
    }
}
