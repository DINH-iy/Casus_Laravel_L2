<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::where('name', 'Admin')->first();
        $customerRole = Role::where('name', 'Customer')->first();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@webshop.nl',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role_id' => $adminRole->id,
        ]);

        User::create([
            'name' => 'Jan Jansen',
            'email' => 'jan@webshop.nl',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role_id' => $customerRole->id,
        ]);

        User::create([
            'name' => 'Lisa de Vries',
            'email' => 'lisa@webshop.nl',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role_id' => $customerRole->id,
        ]);
    }
}