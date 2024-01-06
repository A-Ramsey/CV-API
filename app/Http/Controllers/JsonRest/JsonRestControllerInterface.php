<?php

namespace App\Http\Controllers\JsonRest;

use App\Models\CurriculumVitae;
use Illuminate\Http\JsonResponse;

interface JsonRestControllerInterface
{
    public function index (CurriculumVitae $cv): JsonResponse;
}
