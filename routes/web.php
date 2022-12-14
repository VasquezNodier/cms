<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConnectController;

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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', function () {
    return "INDEX";
});

Route::match(['get', 'post'], 'login', [ConnectController::class, 'index'])->name('login');
Route::get('logout', [ConnectController::class, 'logout'])->name('logout');
Route::get('register', [ConnectController::class, 'create'])->name('register');
Route::post('createUser', [ConnectController::class, 'store'])->name('create');
Route::get('recover', [ConnectController::class, 'edit'])->name('recover');

