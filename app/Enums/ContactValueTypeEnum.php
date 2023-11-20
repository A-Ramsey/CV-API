<?php

namespace App\Enums;

use App\Traits\Enumable;

enum ContactValueTypeEnum: string
{
    use Enumable;

    case STRING = 'String';
    case URL = 'URL';
}