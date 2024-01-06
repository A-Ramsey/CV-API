<?php

namespace App\Http\Controllers\JsonRest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\JsonRest\JsonRestControllerInterface;
use App\Models\CurriculumVitae;
use Illuminate\Http\JsonResponse;

class JsonRestContactController extends Controller implements JsonRestControllerInterface
{
    public function index(CurriculumVitae $cv): JsonResponse
    {
        return response()->json($cv->contactMethods);
    }
}
