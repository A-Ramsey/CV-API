<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\CurriculumVitae;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'technologies',
        'aims',
        'githubLink',
        'projectLink',
    ];

    public function curriculumVitaes(): BelongsToMany
    {
        return $this->belongsToMany(CurriculumVitae::class);
    }
}
