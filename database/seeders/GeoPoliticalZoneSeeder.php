<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeoPoliticalZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('geo_political_zones')->delete();
        $geo_political_zones = [
            ['title' => 'North Central', 'country_id' => 160],
            ['title' => 'North East', 'country_id' => 160],
            ['title' => 'North West', 'country_id' => 160],
            ['title' => 'South East', 'country_id' => 160],
            ['title' => 'South South', 'country_id' => 160],
            ['title' => 'South West', 'country_id' => 160],
        ];

        DB::table('geo_political_zones')->insert($geo_political_zones);
        
    }
}
