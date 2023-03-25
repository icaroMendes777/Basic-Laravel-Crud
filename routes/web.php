<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/users');
});


Route::get('/users', [Users::class, 'index'])->name('list');

Route::get('/users/{id}', [Users::class, 'show'])->name('user');

Route::get('/users/{id}/delete', [Users::class, 'destroy'])->name('user.delete');

//Route::get('/users/sobre', [Users::class, 'user'])->name('sobre');

Route::view('sobre', '/users/sobre')->name('sobre');
