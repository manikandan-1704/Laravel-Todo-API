<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/register', 'App\Http\Controllers\AuthController@register');
Route::post('/login', 'App\Http\Controllers\AuthController@login');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('todos', [TodoController::class, 'store']);
    Route::get('/todos', 'App\Http\Controllers\TodoController@index');
    Route::post('/todos', 'App\Http\Controllers\TodoController@store');
    Route::get('/todos/{id}', 'App\Http\Controllers\TodoController@show');
    Route::put('/todos/{id}', 'App\Http\Controllers\TodoController@update');
    Route::delete('/todos/{id}', 'App\Http\Controllers\TodoController@destroy');
});
