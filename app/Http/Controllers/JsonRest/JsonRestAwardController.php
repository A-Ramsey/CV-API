<?php

namespace App\Http\Controllers\JsonRest;

use App\Enums\SkillAwardTypeEnum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\JsonRest\JsonRestControllerInterface;
use App\Models\CurriculumVitae;
use Illuminate\Http\JsonResponse;

class JsonRestAwardController extends Controller implements JsonRestControllerInterface
{
    public function index(CurriculumVitae $cv): JsonResponse
    {
        return response()->json($cv->skillAwards()->where('skillAwardType', SkillAwardTypeEnum::AWARD));
    }
}
