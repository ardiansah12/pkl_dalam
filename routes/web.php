<?php

use App\Http\Controllers\DetailWisataController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\UmpanController;
use App\Http\Controllers\UmpanBalikController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',function() {
    return view('layouts.user');
});

Route::resource('/user', UmpanBalikController::class);

Route::get('/informasi', function () {
    return view('informasi.wisata');
});

// Route::get('/datawisata', function () {
//     return view('datawisata.tentangkami');
// });
Route::get('/detail', function () {
    return view('informasi.detail');
});
Route::get('/tentang', function () {
    return view('layouts.tentang');
});


Route::get('/informasi', [App\Http\Controllers\DataController::class, 'wisata']);

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin', function () {
    return view('layouts.admin');
});
Route::get('/user', function () {
    return view('user.index');
});

Route::resource('wisataa', WisataController::class);
Route::resource('/wisata', DetailController::class);
// Route::resource('/umpanbalik', UmpanController::class);
Route::resource('/umpanbalik', UmpanBalikController::class);


