<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


Route::get('/home', 'HomeController@index');
Route::get('/about', function () {
    return 'Halaman About';
});
Route::post('/submit', 'FormController@submit');

Route::get('/old-url', function () {
    return redirect('/new-url', 301); // Redirect permanen
});

Route::get('/profile', function () {
    return redirect()->route('user.profile'); // Redirect dengan menggunakan nama rute
});

Route::redirect('/legacy-url', '/new-url'); // Redirect dengan menggunakan metode redirect()

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('petugas/dashboard');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');


Route::middleware(['auth'])->group(function () {
    // Rute yang memerlukan otentikasi
    });
