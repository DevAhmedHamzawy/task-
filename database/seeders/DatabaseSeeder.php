<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Option;
use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Restaurant::factory(10)->create();
        Item::factory(10)->create();
        Option::factory(10)->create();
    }
}
