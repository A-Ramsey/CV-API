<?php

namespace App\Http\Controllers\JsonRest;

use Illuminate\Http\Request;
Use App\Http\Controllers\Controller;
use App\Http\Controllers\JsonRest\JsonRestControllerInterface;
use App\Models\CurriculumVitae;
use Illuminate\Http\JsonResponse;

class JsonRestProjectController extends Controller implements JsonRestControllerInterface
{
    public function index(CurriculumVitae $cv): JsonResponse
    {
        return response()->json($cv->projects);
    }
}
