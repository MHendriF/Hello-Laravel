<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['name' => 'admin'],
            ['name' => 'partner'],
        ])->each(fn ($role) => Role::create($role));

        User::find(1)->assignRole(Role::find(1)); // admin
        User::find(2)->assignRole(Role::find(2)); // partner
    }
}
