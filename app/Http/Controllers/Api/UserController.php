<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function assignRole(User $user)
    {
        $user->removeRole(RoleEnum::EMPLOYEE);
        return $user->assignRole(RoleEnum::OWNER);
    }
}
