<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::resource('/',FormController::class);

Route::GET('/view',  [FormController::class,'view']);

Route::GET('/{id}/edit',  [FormController::class,'edit']);
Route::POST('/{id}/update',  [FormController::class,'update']);


Route::GET('/{id}/print',  [FormController::class,'print']);



