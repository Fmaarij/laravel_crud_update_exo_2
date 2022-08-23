<?php

use App\Http\Controllers\MembresController;
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

Route::get('/',[MembresController::class,'index']);
Route::get('/homme',[MembresController::class,'index'])->name('homme');
Route::get('/femme',[MembresController::class,'index'])->name('femme');
Route::post('/createMember',[MembresController::class,'storeMember']);
