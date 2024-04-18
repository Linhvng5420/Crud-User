<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;

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

Route::get('dashboard', [CrudUserController::class, 'dashboard']);

Route::get('home', [CrudUserController::class, 'home'])->name('home');

Route::get('login', [CrudUserController::class, 'login'])->name('login');
Route::post('login', [CrudUserController::class, 'authUser'])->name('user.authUser');

Route::get('signup', [CrudUserController::class, 'signup'])->name('signup');
Route::post('signup', [CrudUserController::class, 'postUser'])->name('user.postUser');

Route::get('list', [CrudUserController::class, 'listUser'])->name('user.list');

Route::get('viewUser', [CrudUserController::class, 'viewUser'])->name('user.viewUser');


Route::get('/', function () {
    return view('crud.home');
});
