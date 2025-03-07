<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //
    public function index()
    {
        return view('pages.profil.index');
    }

    public function edit()
    {
        return view('pages.profil.edit');
    }

    public function password()
    {
        return view('pages.profil.password');
    }
}
