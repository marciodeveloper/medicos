<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/medicos', 'MedicoController@index');
Route::get('/medicos/create', 'MedicoController@create');
Route::post('/medicos', 'MedicoController@store');
Route::get('/medicos/{medico}/edit', 'MedicoController@edit');
Route::put('/medicos/{medico}', 'MedicoController@update');
Route::delete('/medicos/{medico}', 'MedicoController@destroy');
