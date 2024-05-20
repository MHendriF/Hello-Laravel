<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::withoutEvents(fn () =>  Store::factory(10)->hasProducts(20)->create());
    }
}
