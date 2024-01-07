<?php

use App\Http\Controllers\JsonRest\JsonRestAwardController;
use App\Http\Controllers\JsonRest\JsonRestContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsonRest\JsonRestAuthController;
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
        Route::post('login', [JsonRestAuthController::class, 'index']);
        Route::middleware('auth:sanctum')->prefix('cv')->group(function () {
            Route::get('/', [JsonRestCvController::class, 'index']);

            Route::prefix('{cv}')->group(function () {
                //cv
                Route::get('/', [JsonRestCvController::class, 'get'])->name('api.json_rest.get_cv');

                //qualifications
                Route::get('qualifications', [JsonRestQualificationController::class, 'index'])->name('api.json_rest.get_qualifications');

                //jobs
                Route::get('jobs', [JsonRestJobController::class, 'index'])->name('api.json_rest.get_jobs');

                //projects
                Route::get('projects', [JsonRestProjectController::class, 'index'])->name('api.json_rest.get_projects');

                //sections
                Route::get('sections', [JsonRestSectionsController::class, 'index'])->name('api.json_rest.get_sections');

                //skills
                Route::get('skills', [JsonRestSkillController::class, 'index'])->name('api.json_rest.get_skills');

                //awards
                Route::get('awards', [JsonRestAwardController::class, 'index'])->name('api.json_rest.get_awards');

                //contact
                Route::get('contact', [JsonRestContactController::class, 'index'])->name('api.json_rest.get_contact');
            });
        });

    });
});
