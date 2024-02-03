<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\WebcamController;


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
    return view('UI.welcome');
});
Route::get('/user_details',[WebsiteController::class, 'user_details'])->name('user_details');
Route::get('/screen',[WebsiteController::class, 'screen'])->name('screen');
Route::get('/results',[WebsiteController::class, 'results'])->name('results');
Route::get('webcam', [WebcamController::class, 'index'])->name('webcam');
Route::post('webcam', [WebcamController::class, 'store'])->name('webcam.capture');
Route::get('proceed', [WebsiteController::class, 'proceed'])->name('proceed');
