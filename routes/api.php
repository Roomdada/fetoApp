<?php

use App\Http\Controllers\casController;
use App\Http\Controllers\casTypeController;
use App\Http\Controllers\childrenController;
use App\Http\Controllers\structureController;
use App\Http\Controllers\typeController;
use App\Http\Controllers\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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




Route::apiResource('/users',userController::class);
Route::apiResource('/cas',casController::class);
Route::apiResource('/children',childrenController::class);
Route::apiResource('/type-structure',typeController::class);
Route::apiResource('/organisation',structureController::class);
Route::apiResource('/castype',casTypeController::class);
