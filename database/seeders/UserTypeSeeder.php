<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title' => 'akuntan', 'name' => 'Akuntan', 'level' => 5],
            ['title' => 'ortu', 'name' => 'Orang Tua', 'level' => 4],
            ['title' => 'guru', 'name' => 'Guru', 'level' => 3],
            ['title' => 'admin', 'name' => 'Admin', 'level' => 2],
            ['title' => 'super_admin', 'name' => 'Super Admin', 'level' => 1],
           // ['title' => 'librarian', 'name' => 'librarian', 'level' => 6],
        ];
        DB::table('user_types')->insert($data);
    }
}
