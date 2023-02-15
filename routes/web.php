<?php

use App\Http\Controllers\HomebaseController;
use App\Http\Controllers\WorkController;
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

Route::get('/', [HomebaseController::class, 'index']);

Route::get('/tasks',[WorkController::class, 'index']);
Route::get('/tasks/{id}', [WorkController::class, 'show']); //show
Route::post('/tasks', [WorkController::class, 'store']); // store
Route::patch('/tasks/{id}', [WorkController::class, 'update']); // update
Route::delete('/tasks/{id}', [WorkController::class, 'delete']); //delete
