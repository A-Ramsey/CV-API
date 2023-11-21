<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\CurriculumVitae;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'startDate',
        'endDate',
        'description',
        'company',
        'location',
        'notes',
        'isWorkExperience',
        'isCurrent',
    ];

    public function curriculumVitaes(): BelongsToMany
    {
        return $this->belongsToMany(CurriculumVitae::class);
    }
}
