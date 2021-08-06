<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalGovtAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('local_govt_areas')->delete();
        $local_govt_areas = [

        ];

        DB::table('local_govt_areas')->insert($local_govt_areas);
    }
}
