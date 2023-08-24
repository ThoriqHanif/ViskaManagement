<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d = [

            ['name' => 'A', 'mark_from' => 85, 'mark_to' => 100, 'remark' => 'Sangat Bagus'],
            ['name' => 'B', 'mark_from' => 70, 'mark_to' => 84, 'remark' => 'Bagus'],
            ['name' => 'C', 'mark_from' => 60, 'mark_to' => 69, 'remark' => 'Cukup'],
            ['name' => 'D', 'mark_from' => 50, 'mark_to' => 59, 'remark' => 'Buruk'],
            ['name' => 'E', 'mark_from' => 0, 'mark_to' => 49, 'remark' => 'Gagal'],


        ];
        DB::table('nilai')->insert($d);
    }
}
