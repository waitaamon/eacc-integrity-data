<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Institution;
use Illuminate\Auth\Access\HandlesAuthorization;

class InstitutionPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Institution $institution): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Institution $institution): bool
    {
        return $user->is_admin;
    }

    public function delete(User $user, Institution $institution)
    {
        return $user->is_admin;
    }
}
