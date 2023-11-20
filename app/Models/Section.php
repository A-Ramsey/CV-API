<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'text',
    ];

    public function subSection(): HasMany
    {
        return $this->hasMany(Section::class);
    }

    public function parentSection(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }
}
