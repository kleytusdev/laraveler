<?php

declare(strict_types=1);

namespace App\Enums;

/**
 * enum RoleEnum
 */
enum RoleEnum: string
{
    case OWNER       = 'Dueño';
    case EMPLOYEE    = 'Empleado';
}
