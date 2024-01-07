<?php

namespace App\Http\Controllers\JsonRest;

use Illuminate\Http\Request;
Use App\Http\Controllers\Controller;
use App\Models\CurriculumVitae;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\JsonRest\JsonRestControllerInterface;

class JsonRestCvController extends Controller //implements JsonRestControllerInterface
{
    // public function index(): JsonResponse
    // {
    //     return response()->json();
    // }
    public function index(): JsonResponse
    {
        dd(request());
        return response()->json();
    }

    public function get(CurriculumVitae $cv): JsonResponse
    {
        return response()->json($cv);
    }
}
