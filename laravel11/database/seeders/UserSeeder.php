<?php

namespace Database\Seeders;

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
        $today = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
        DB::table('users')->delete();
        DB::table('users')->insert(array(
            array('name' => 'Sysadmin', 'email' => 'sysadmin@gmail.com',  'password' => bcrypt('zxcasd'), 'created_at' => $today, 'updated_at' => $today),
            array('name' => 'Hendri', 'email' => 'hendri@gmail.com',  'password' => bcrypt('zxcasd'), 'created_at' => $today, 'updated_at' => $today),
            array('name' => 'Hendra', 'email' => 'hendra@gmail.com',  'password' => bcrypt('zxcasd'), 'created_at' => $today, 'updated_at' => $today),
            array('name' => 'Hendro', 'email' => 'hendro@gmail.com',  'password' => bcrypt('zxcasd'), 'created_at' => $today, 'updated_at' => $today),
        ));
    }
}
