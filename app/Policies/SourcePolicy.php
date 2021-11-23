<?php

namespace App\Policies;

use App\Models\Source;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SourcePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Source $source): bool
    {
        return $user->is_admin;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Source $source): bool
    {
        return $user->is_admin;
    }

    public function delete(User $user, Source $source): bool
    {
        return $user->is_admin;
    }
}
