<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CountrySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(GeoPoliticalZoneSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(SenatorialZoneSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(RankTypeSeeder::class);
    }
}
