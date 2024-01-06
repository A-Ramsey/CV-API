<?php

namespace App\Enums;

use App\Traits\Enumable;
use App\Enums\Attributes\Colour;

enum UserTypeEnum: string
{
    use Enumable;

    case API = "API";
    case ADMIN = "Admin";
}
