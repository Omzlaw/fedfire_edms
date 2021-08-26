<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TerminationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('termination_types')->delete();
        $termination_types = [
            ['title' => 'By Registration of Invaliding', 'description' => 'By Registration of Invaliding'],
            ['title' => 'By Death', 'description' => 'By Death'],
            ['title' => 'By Transfer', 'description' => 'By Transfer'],

        ];

        DB::table('termination_types')->insert($termination_types);
    }
}
