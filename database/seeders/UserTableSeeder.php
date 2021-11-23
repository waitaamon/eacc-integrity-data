<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Moses Tile',
                'email' => 'mtile@integrity.go.ke',
            ],
            [
                'name' => 'Amon Waita',
                'email' => 'agathoka@integrity.go.ke',
            ]
        ];

        collect($users)->each(fn($user) => User::create(array_merge(
            [
                'password' => bcrypt('password'),
                'email_verified_at' => now()
            ], $user)));
    }
}
