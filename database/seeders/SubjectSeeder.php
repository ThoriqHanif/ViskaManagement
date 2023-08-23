<?php

namespace Database\Seeders;

use App\Models\MyClass;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = ['Pemograman Website', 'Pemograman Mobile'];
        $sub_slug = ['Web', 'Mob'];
        $guru_id = User::where(['user_type' => 'guru'])->first()->id;
        $my_classes = MyClass::all();

        foreach ($my_classes as $my_class) {

            $data = [

                [
                    'name' => $subjects[0],
                    'slug' => $sub_slug[0],
                    'my_class_id' => $my_class->id,
                    'teacher_id' => $guru_id
                ],

                [
                    'name' => $subjects[1],
                    'slug' => $sub_slug[1],
                    'my_class_id' => $my_class->id,
                    'teacher_id' => $guru_id
                ],

            ];

            DB::table('subjects')->insert($data);
        }
    }
}
