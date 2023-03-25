<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Access-Control-Allow-Origin: *

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// /api/v1 -> First API version
Route::middleware(['cors'])->group(function (){     //Added Middleware CORS to evade the protection against unreliable entities
    Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\API\V1'], function() { //Adds up a prefix to the API knowing we are using the v1 or first version, this can be quickly changed if it is decided to release a new version of the api, it also allow us to keep older versions stored in the application
        Route::apiResource('tasks', TaskController::class); //Creates a resource on the api side making multiple endpoints that allow, PUT, GET, POST, PATCH, DELETE
    });
});
