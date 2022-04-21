<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigationController;
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

// Route::controller(ClasificationController::class)->group(function(){
//     Route::get('clasification');
// });

Route::get('/clasification', [NavigationController::class, 'clasification']);
Route::get('/register', [NavigationController::class, 'register']);
Route::get('/calendar', [NavigationController::class, 'calendar']);
Route::get('/result', [NavigationController::class, 'result']);
Route::get('/show', [NavigationController::class, 'show']);
Route::get('/delete', [NavigationController::class, 'delete']);

