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


// les routes
Route::get('/home', function () {
    return view('homepage');
})->name('welcome');

Route::get('/village-arts', [App\Http\Controllers\VillageArtsController::class, 'index'] )->name('village-arts');
Route::get('/loisirs', [App\Http\Controllers\LoisirsController::class, 'index']  )->name('loisirs');
Route::get('/sport',[App\Http\Controllers\SportController::class, 'index'] )->name('sport');
Route::get('/technologie-numerique', [App\Http\Controllers\TechnologieNumeriqueController::class, 'index'])->name('technologie-numerique');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

