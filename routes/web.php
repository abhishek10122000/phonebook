<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VcardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::match(['get', 'post'], '/',[VcardController::class,"home"])->name("home");
Route::match(['get', 'post'], '/search',[VcardController::class,"search"])->name("search");
Route::get('/edit/{id}',[VcardController::class,"edit"])->name("edit");
Route::put('/update/{id}',[VcardController::class,"update"])->name("update");
Route::get('/delete/{id}',[VcardController::class,"dis"])->name('delete');


