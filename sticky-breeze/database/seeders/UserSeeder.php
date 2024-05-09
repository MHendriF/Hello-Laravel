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
            array('name' => 'Sysadmin', 'email' => 'sysadmin@gmail.com',  'password' => bcrypt('zxcasd'), 'email_verified_at' => now()),
            array('name' => 'Uchiha', 'email' => 'uchiha@gmail.com',  'password' => bcrypt('zxcasd'), 'email_verified_at' => now()),
            array('name' => 'Saiyan', 'email' => 'saiyan@gmail.com',  'password' => bcrypt('zxcasd'), 'email_verified_at' => now()),
            array('name' => 'Itachi', 'email' => 'itachi@gmail.com',  'password' => bcrypt('zxcasd'), 'email_verified_at' => now()),
            array('name' => 'Sasuke', 'email' => 'sasuke@gmail.com',  'password' => bcrypt('zxcasd'), 'email_verified_at' => now()),
            array('name' => 'Madara', 'email' => 'madara@gmail.com',  'password' => bcrypt('zxcasd'), 'email_verified_at' => now()),
        ));

        User::factory(10)->create();
    }
}
