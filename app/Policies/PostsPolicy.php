<?php

namespace App\Policies;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class PostsPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): Response|bool
    {
    }

    public function view(User $user, Posts $posts): Response|bool
    {
    }

    public function create(User $user): Response|bool
    {
    }

    public function update(User $user, Posts $posts): Response|bool
    {
    }

    public function delete(User $user, Posts $posts): Response|bool
    {
    }

    public function restore(User $user, Posts $posts): Response|bool
    {
    }

    public function forceDelete(User $user, Posts $posts): Response|bool
    {
    }
}
