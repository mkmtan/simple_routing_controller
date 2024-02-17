<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/about-me', 
    [PageController::class, 'aboutMe'])->name('aboutMe');
Route::get('/skills', 
    [PageController::class, 'skills'])->name('skills');
Route::get('/hobbies', 
    [PageController::class, 'hobbies'])->name('hobbies');