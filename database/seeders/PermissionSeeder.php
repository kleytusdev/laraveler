<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        Permission::create(['name' => 'tasks.show'])->syncRoles([RoleEnum::OWNER->value, RoleEnum::EMPLOYEE->value]);
    }
}
