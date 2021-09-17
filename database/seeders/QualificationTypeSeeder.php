<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QualificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qualification_types')->delete();
        $qualification_types = [
            ['title' => 'BENG', 'description' => 'Bachelor of Engineering'],
            ['title' => 'BSC', 'description' => 'Bachelor of Science'],
            ['title' => 'MSC', 'description' => 'Masters of Science'],
            ['title' => 'HND', 'description' => 'Higher National Diploma'],
            ['title' => 'OND', 'description' => 'Ordinary National Diploma'],
            ['title' => 'SSCE', 'description' => 'Senior School Certificate Examination'],
        ];

        DB::table('qualification_types')->insert($qualification_types);
    }
}
