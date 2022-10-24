<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\http\Controllers\contohController;
use App\http\Controllers\SiswaController;
use App\http\Controllers\BookController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// function
// task 1
// URL : http://localhost:8000/api/halo
// METHOD : GET
// exec : function
// RETURN JSON => {"me": "Ganteng"}

// Route::get('/halo',function(){
//     return ["me" => "Ganteng"]; 
// });
Route::resource('siswa', SiswaController::class);
Route::resource('coba', contohController::class);
Route::resource('book', BookController::class);