<?php

namespace App\Http\Controllers\JsonRest;

use Illuminate\Http\Request;
Use App\Http\Controllers\Controller;
use App\Models\CurriculumVitae;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\JsonRest\JsonRestControllerInterface;

class JsonRestQualificationController extends Controller implements JsonRestControllerInterface
{
    public function index(CurriculumVitae $cv): JsonResponse
    {
        return response()->json($cv->qualifications);
    }
}
