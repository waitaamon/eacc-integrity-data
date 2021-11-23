<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Models\Concerns\{IsFilamentUser, SendsFilamentPasswordResetNotification};

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable, IsFilamentUser, SendsFilamentPasswordResetNotification;

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    CONST ADMINS = [ 'mtile@integrity.go.ke', 'agathoka@integrity.go.ke'];

    public function isFilamentAdmin(): bool
    {
        return in_array($this->email, User::ADMINS);
    }
}
