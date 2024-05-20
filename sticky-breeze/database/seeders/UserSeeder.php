<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();
        DB::table('users')->insert(array(
            array('name' => 'admin', 'email' => 'admin@admin.com',  'password' => bcrypt('admin'), 'email_verified_at' => now()),
            array('name' => 'Uchiha', 'email' => 'uchiha@gmail.com',  'password' => bcrypt('zxcasd'), 'email_verified_at' => now()),
        ));

        User::factory(8)->create();
    }
}
