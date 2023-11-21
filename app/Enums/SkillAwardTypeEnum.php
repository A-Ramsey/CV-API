<?php

namespace App\Enums;

use App\Traits\Enumable;

enum SkillAwardTypeEnum: string
{
    use Enumable;

    case SKILL = 'Skill';
    case AWARD = 'Award';
}