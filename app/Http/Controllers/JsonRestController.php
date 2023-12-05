<?php

namespace App\Http\Controllers;

use App\Models\CurriculumVitae;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class JsonRestController extends Controller
{
    public function getCV(CurriculumVitae $cv): JsonResponse
    {
        return response()->json($cv);
    }
}
