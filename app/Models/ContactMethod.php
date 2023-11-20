<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\ContactValueTypeEnum;

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
}
