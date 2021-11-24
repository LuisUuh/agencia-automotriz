<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
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

// Route::get('/', function () {
//     return view('home');
// });
Route::resource('home', home::class);
Route::get('/', [home::class, 'index'])->name('home');
Route::get('/contact', [home::class, 'contact'])->name('contact');
Route::post('/contact', [home::class, 'store'])->name('sendForm');
Route::post('/', [home::class, 'store'])->name('sendForm');
