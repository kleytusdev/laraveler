<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    // public function before(User $user): bool|Response
    // {
    //     if ($user->id === 1) {
    //         return true;
    //     }

    //     return Response::denyAsNotFound();
    // }

    public function viewAny(User $user): bool
    {
        return $user->email === 'pfannerstill.ofelia@example.net';
    }

    public function view(User $user, Post $post): Response
    {
        return $user->id === $post->user_id
            ? Response::allow()
            : Response::deny('Este post no te pertenece.');
    }

    public function create(User $user): bool|Response
    {
        return $user->email === 'pfannerstill.ofelia@example.net'
            ? Response::allow()
            : Response::denyWithStatus(500, 'No tienes permisos para crear un post.');
    }

    public function update(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }
}
