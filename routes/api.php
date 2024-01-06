<?php

use App\Http\Controllers\JsonRest\JsonRestAwardController;
use App\Http\Controllers\JsonRest\JsonRestContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsonRest\JsonRestCvController;
use App\Http\Controllers\JsonRest\JsonRestQualificationController;
use App\Http\Controllers\JsonRest\JsonRestJobController;
use App\Http\Controllers\JsonRest\JsonRestProjectController;
use App\Http\Controllers\JsonRest\JsonRestSectionsController;
use App\Http\Controllers\JsonRest\JsonRestSkillController;

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
        Route::prefix('cv/{cv}')->group(function () {

            //cv
            Route::get('/', [JsonRestCvController::class, 'index']);

            //qualifications
            Route::get('qualifications', [JsonRestQualificationController::class, 'index']);

            //jobs
            Route::get('jobs', [JsonRestJobController::class, 'index']);

            //projects
            Route::get('projects', [JsonRestProjectController::class, 'index']);

            //sections
            Route::get('sections', [JsonRestSectionsController::class, 'index']);

            //skills
            Route::get('skills', [JsonRestSkillController::class, 'index']);

            //awards
            Route::get('awards', [JsonRestAwardController::class, 'index']);

            //contact
            Route::get('contact', [JsonRestContactController::class, 'index']);
        });

    });
});
