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
        $this->call(StatesTableSeeder::class);

        \App\Models\User::factory(10)->create();
        \App\Models\Distributor::factory(10)->create();
        \App\Models\Client::factory(20)->create();
        \App\Models\Invoice::factory(200)->create();
    }
}
