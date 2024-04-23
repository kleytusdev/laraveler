<?php

declare(strict_types=1);

namespace App\Enums;

/**
 * enum TaskTagEnum
 */
enum TaskTagEnum: string
{
    case ARCHIVED  = 'Archivado';
    case IMPORTANT = 'Importante';
    case DIFFICULT = 'Dificultoso';
}
