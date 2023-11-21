<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Enums\ContactValueTypeEnum;
use App\Models\CurriculumVitae;

class ContactMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'value',
        'valueType',
    ];

    protected $casts = [
        'valueType' => ContactValueTypeEnum::class,
    ];

    public function curriculumVitaes(): BelongsToMany
    {
        return $this->belongsToMany(CurriculumVitae::class);
    }
}
