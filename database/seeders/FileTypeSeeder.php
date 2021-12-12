<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('file_types')->delete();
        $file_types = [
            ['title' => 'Employee Records', 'description' => 'Employee Records', 'status' => 1],
            ['title' => 'General Policy Documents', 'description' => 'General Policy Documents', 'status' => 1],
        ];
        DB::table('file_types')->insert($file_types);
    }
}
