<?php

use Illuminate\Support\Facades\Route;

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
<<<<<<< Updated upstream
=======
Route::get('dashboard', [CrudUserController::class, 'dashboard']);

Route::get('home', [CrudUserController::class, 'home'])->name('home');

Route::get('login', [CrudUserController::class, 'login'])->name('login');
Route::post('login', [CrudUserController::class, 'authUser'])->name('user.authUser');

Route::get('signup', [CrudUserController::class, 'signup'])->name('signup');

>>>>>>> Stashed changes

Route::get('/', function () {
    return view('welcome');
});
