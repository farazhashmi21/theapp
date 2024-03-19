<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Wellcome;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
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

Route::resource("/", Wellcome::class);
Route::resource("/about", AboutController::class);
Route::resource("/services", ServicesController::class);
Route::resource("/contact", ContactController::class);
