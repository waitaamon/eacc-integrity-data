<?php

namespace App\Policies;

use App\Models\User;
use App\Models\IntegrityData;
use Illuminate\Auth\Access\HandlesAuthorization;

class IntegrityDataPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, IntegrityData $integrityData): bool
    {
        return $user->is_admin || $integrityData->user_id == $user->id;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, IntegrityData $integrityData): bool
    {
        return $user->is_admin || $integrityData->user_id == $user->id;
    }

    public function delete(User $user, IntegrityData $integrityData): bool
    {
        return $user->is_admin;
    }
}
