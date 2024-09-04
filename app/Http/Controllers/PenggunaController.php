<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function pengguna() {
        return view('jobsheet2.pengguna')
            ->with('id', '04')
            ->with('nama', 'Bagas Farel');
    }
}

