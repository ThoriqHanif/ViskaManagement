<?php

namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_classes')->delete();
        $ct = ClassType::pluck('id')->all();

        $data = [
            ['name' => 'RPL 1', 'class_type_id' => $ct[2]],
            ['name' => 'RPL 2', 'class_type_id' => $ct[2]],
            ['name' => 'RPL 3', 'class_type_id' => $ct[2]],
            ['name' => 'DKV 1', 'class_type_id' => $ct[3]],
            ['name' => 'DKV 2', 'class_type_id' => $ct[3]],
            ['name' => 'PPLG', 'class_type_id' => $ct[4]],
            ['name' => 'TKJ 1', 'class_type_id' => $ct[5]],
            ['name' => 'TKJ 2', 'class_type_id' => $ct[5]],
            ];

        DB::table('my_classes')->insert($data);

    
    }
}
