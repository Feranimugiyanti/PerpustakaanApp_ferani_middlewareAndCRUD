<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Mahasiswa extends Controller
{
    public function index() {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    
}
}
?>