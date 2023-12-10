<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Halaman home');
    }
}
use Illuminate\Support\Facades\DB;

public function index()
{
    $users = DB::table('users')->get();
    return view('users.index', ['users' => $users]);
}
use Illuminate\Support\Facades\DB;

public function index()
{
    $users = DB::table('users')->get();
    return view('users.index', ['users' => $users]);
}
