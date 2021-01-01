<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\ClipStoreController;

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

Route::post('login', [UserController::class, 'ologin']);

Route::post('register', [UserController::class, 'oregister']);

Route::get('listUsers', [UserController::class, 'userlist'])->middleware('auth:api');

Route::get('userinfo', [UserController::class, 'userinfo']); 

Route::post('/add/clipup', [ClipStoreController::class, 'store']);

Route::post('/view/clipup', [ClipStoreController::class, 'store']);

