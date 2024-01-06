<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\Job;
use App\Models\Qualification;
use App\Models\Section;
use App\Models\ContactMethod;
use App\Models\SkillAward;
use App\Models\Project;

class CurriculumVitae extends Model
{
    use HasFactory;

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    protected $fillable = [
        'slug'
    ];

    public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(Job::class);
    }

    public function qualifications(): BelongsToMany
    {
        return $this->belongsToMany(Qualification::class);
    }

    public function sections(): BelongsToMany
    {
        return $this->belongsToMany(Section::class);
    }

    public function contactMethods(): BelongsToMany
    {
        return $this->belongsToMany(ContactMethod::class);
    }

    public function skillAwards(): BelongsToMany
    {
        return $this->belongsToMany(SkillAward::class);
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
