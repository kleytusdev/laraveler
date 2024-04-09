<?php

declare(strict_types=1);

namespace App\Enums;

/**
 * enum TaskStatusEnum
 */
enum TaskStatusEnum: string
{
    case UNDER_REVIEW  = 'Revisión';
    case CANCELED      = 'Cancelada';
    case PENDING       = 'Pendiente';
    case COMPLETED     = 'Completada';
    case IN_PROGRESS   = 'En progreso';
}
