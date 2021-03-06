<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RankTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rank_types')->delete();
        $rank_types = [
            ['title' => 'CGF', 'description' => 'Controller General Fire', 'type' => 0],
            ['title' => 'DCGF', 'description' => 'Deputy Controller General Fire', 'type' => 0],
            ['title' => 'ACGF', 'description' => 'Assistant Controller General Fire', 'type' => 0],
            ['title' => 'CF', 'description' => 'Controller Fire', 'type' => 0],
            ['title' => 'DCF', 'description' => 'Deputy Controller Fire', 'type' => 0],
            ['title' => 'ACF', 'description' => 'Assistant Controller Fire', 'type' => 0],
            ['title' => 'CSF', 'description' => 'Chief Superintendent Fire', 'type' => 0],
            ['title' => 'SF', 'description' => 'Superintendent Of Fire', 'type' => 0],
            ['title' => 'DSF', 'description' => 'Deputy Superintendent Of Fire', 'type' => 0],
            ['title' => 'ASF I', 'description' => 'Assistant Superintendent Of Fire I', 'type' => 0],
            ['title' => 'ASF II', 'description' => 'Assistant Superintendent Of Fire II', 'type' => 0],
            ['title' => 'CIF I', 'description' => 'Chief Inspector of Fire', 'type' => 0],
            ['title' => 'ACIF', 'description' => 'Assistant Chief Inspector of Fire', 'type' => 0],
            ['title' => 'PIF I', 'description' => 'Principal Inspector of Fire I', 'type' => 0],
            ['title' => 'PIF II', 'description' => 'Principal Inspector of Fire II', 'type' => 0],
            ['title' => 'PIF III', 'description' => 'Principal Inspector of Fire III', 'type' => 0],
            ['title' => 'SIF', 'description' => 'Senior Inspector Of Fire', 'type' => 0],
            ['title' => 'IF', 'description' => 'Inspector Of Fire', 'type' => 1],
            ['title' => 'AIF', 'description' => 'Assistant Inspector Of Fire', 'type' => 1],
            ['title' => 'CFA', 'description' => 'Chief Fire Assistant', 'type' => 1],
            ['title' => 'SFA', 'description' => 'Fire Assistant', 'type' => 1],
            ['title' => 'FA I', 'description' => 'Fire Assistant I', 'type' => 1],
            ['title' => 'FA II', 'description' => 'Fire Assistant II', 'type' => 1],
            ['title' => 'FA III', 'description' => 'Fire Assistant III', 'type' => 1],
        ];

        DB::table('rank_types')->insert($rank_types);
    }
}
