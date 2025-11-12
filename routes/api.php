<?php

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
=======
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
