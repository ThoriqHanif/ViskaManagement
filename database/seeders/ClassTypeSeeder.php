<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => '10', 'code' => 'X'],
            ['name' => '11', 'code' => 'XI'],
            ['name' => '12', 'code' => 'XII'],
        ];

        DB::table('class_types')->insert($data);
    }
}
