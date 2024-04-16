<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PermissionController extends Controller
{
    public function get()
    {
        $user = Auth::user();

        return $user->getAllPermissions()->map(function ($permission) {
            return [
                'id' => $permission->id,
                'name' => $permission->name
            ];
        });
    }
}
