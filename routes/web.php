<?php

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

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 789919b299d9bb64c87434613a9466ad7de747e1

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
<<<<<<< HEAD
=======
>>>>>>> pruebas
>>>>>>> 789919b299d9bb64c87434613a9466ad7de747e1
