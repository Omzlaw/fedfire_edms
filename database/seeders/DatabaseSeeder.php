<?php

namespace Database\Seeders;

use App\Models\Shared\LocalGovtArea;
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
        $this->call(LaratrustSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(GeoPoliticalZoneSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(SenatorialZoneSeeder::class);
        $this->call(LocalGovtAreaSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(RankTypeSeeder::class);
        $this->call(FileTypeSeeder::class);
        $this->call(TerminationTypeSeeder::class);
        $this->call(QualificationTypeSeeder::class);
    }
}
