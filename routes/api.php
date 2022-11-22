<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/* no olvidar llamar en la api al controlador */
use App\Http\Controllers\AutomovilController;

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
//esta es la direccion que yo abrire para poder llamar a la api
Route::resource('automoviles', AutomovilController::class);
