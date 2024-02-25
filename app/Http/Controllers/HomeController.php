<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('welcome')
            ->with('name', 'Triyana Dewi Fatmawati')
            ->with('occupation', 'Mahasiswa JTI');
    }
}
