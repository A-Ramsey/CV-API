<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\CurriculumVitae;

class Qualification extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'achieved',
        'level',
        'notes'
    ];

    public function subQualification(): HasMany
    {
        return $this->hasMany(Qualification::class);
    }

    public function parentQualification(): BelongsTo
    {
        return $this->belongsTo(Qualification::class);
    }

    public function learningPeriod(): BelongsTo
    {
        return $this->belongsTo(LearningPeriod::class);
    }

    public function curriculumVitaes(): BelongsToMany
    {
        return $this->belongsToMany(CurriculumVitae::class);
    }
}
