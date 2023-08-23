<?php

namespace Database\Seeders;

use App\Models\GolDarah;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GolDarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gol_darah')->delete();

        $gds = ['O-', 'O+', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-'];
        foreach($gds as  $gd){
            GolDarah::create(['name' => $gd]);
        }
    }
}
