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
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/village-arts', 'VillageArtsController@index')->name('village-arts');
Route::get('/loisirs', 'LoisirsController@index')->name('loisirs');
Route::get('/sport', 'SportController@index')->name('sport');
Route::get('/technologie-numerique', 'TechnologieNumeriqueController@index')->name('technologie-numerique');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

