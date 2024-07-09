<?php

use App\Http\Controllers\Guest\MovieController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MovieController::class, 'index'])->name('welcome');


// prova di rotta parametrica
Route::get('/movie/{id}', [MovieController::class, 'show'])->name('movie');
