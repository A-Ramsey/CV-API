<?php

use App\Http\Controllers\JsonRestController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('json_rest')->group(function () {
    Route::prefix('v1')->group(function () {
        Route::prefix('cv')->group(function () {
            Route::get('{cv}', [JsonRestController::class, 'getCV']);
            
            //implement all the below methods to get the individual sections

            //qualifications

            //jobs

            //projects

            //sections

            //skills

            //awards

            //contact
        });

    });
});
