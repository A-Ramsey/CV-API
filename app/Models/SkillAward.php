<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\SkillAwardTypeEnum;
Use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\CurriculumVitae;

class SkillAward extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'skillAwardType',
    ];

    protected $casts = [
        'skillAwardType' => SkillAwardTypeEnum::class,
    ];

    public function curriculumVitaes(): BelongsToMany
    {
        return $this->belongsToMany(CurriculumVitae::class);
    }
}
