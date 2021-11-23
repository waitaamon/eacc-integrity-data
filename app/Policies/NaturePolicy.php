<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Nature;
use Illuminate\Auth\Access\HandlesAuthorization;

class NaturePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Nature $nature): bool
    {
        return $user->is_admin;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Nature $nature): bool
    {
        return $user->is_admin;
    }

    public function delete(User $user, Nature $nature): bool
    {
        return $user->is_admin;
    }

}
