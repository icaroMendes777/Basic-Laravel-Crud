<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {


///-------------SANCTUM ROUTES----------------

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



////----------------MY ROUTES----------------------

    Route::get('/users/new', [Users::class, 'create'])->name('user.new');


    Route::get('/users', [Users::class, 'index'])->name('user.list');

    Route::get('/user/{id}', [Users::class, 'show'])->name('user');

    Route::get('/user/{id}/edit', [Users::class, 'edit'])->name('user.edit');

    Route::get('/user/{id}/delete', [Users::class, 'destroy'])->name('user.delete');

    Route::put('/user/{id}/update', [Users::class, 'update'])->name('user.update');


    Route::post('/users/store', [Users::class, 'store'])->name('user.store');

    Route::view('/users/sobre', 'users.sobre')->name('sobre');

});

require __DIR__.'/auth.php';







