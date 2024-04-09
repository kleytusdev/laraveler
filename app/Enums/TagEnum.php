<?php

declare(strict_types=1);

namespace App\Enums;

/**
 * enum TagEnum
 */
enum TagEnum: string
{
    case WORK       = 'Work';
    case OTHER      = 'Other';
    case PERSONAL   = 'Personal';
}
