<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('login', [UserController::class, 'ologin']);

Route::get('register', [UserController::class, 'oregister']);

Route::get('listUsers', [UserController::class, 'userlist'])->middleware('auth:api');

Route::get('userinfo', [UserController::class, 'userinfo']); 

