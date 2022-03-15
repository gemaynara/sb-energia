<?php

namespace Database\Seeders;

use App\Models\Distributor;
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
         \App\Models\User::factory(20)->create();
         \App\Models\Distributor::factory(20)->create();
         \App\Models\Client::factory(20)->create();
         \App\Models\Invoice::factory(50)->create();
    }
}
