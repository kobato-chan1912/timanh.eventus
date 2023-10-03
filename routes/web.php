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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get("/", [\App\Http\Controllers\HomeController::class, 'index']);

Route::get("/projects/{id}", [\App\Http\Controllers\JobController::class, 'index'])->name('photos.index');
Route::post("/projects/{id}/result", [\App\Http\Controllers\JobController::class, 'findSimilar'])->name("photos.result");
