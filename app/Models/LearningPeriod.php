<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\CurriculumVitae;

class LearningPeriod extends Model
{
    use HasFactory;

    protected $fillable = [
        'startDate',
        'endDate',
        'placeOfStudy',
        'notes',
    ];

    public function qualifications(): HasMany
    {
        return $this->hasMany(Qualification::class);
    }

    public function curriculumVitaes(): BelongsToMany
    {
        return $this->belongsToMany(CurriculumVitae::class);
    }
}
