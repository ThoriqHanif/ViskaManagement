<?php

namespace Database\Seeders;

use App\Models\MyClass;
use App\Models\StudentRecord;
use App\Models\UserTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StudentRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createStudentRecord();
        $this->createManyStudentRecords(3);
    }
    protected function createManyStudentRecords(int $count)
    {
        $myclass = MyClass::all();

        foreach ($myclass as $myclass) {
            UserTable::factory()
                ->has(
                    StudentRecord::factory()
                        ->state([
                            'my_class_id' => $myclass->id,
                            'user_id' => function (UserTable $user) {
                                return ['user_id' => $user->id];
                            },
                        ]),
                    'student_record'
                )
                ->count($count)
                ->create([
                    'user_type' => 'student',
                    'password' => Hash::make('student'),
                ]);
        }
    }

    protected function createStudentRecord()
    {
        $myclass = MyClass::first();

        $user = UserTable::factory()->create([
            'name' => 'Thoriq Hanif',
            'user_type' => 'student',
            'username' => 'student',
            'password' => Hash::make('123456'),
            'email' => 'student@gmail.com',

        ]);

        StudentRecord::factory()->create([
            'my_class_id' => $myclass->id,
            'user_id' => $user->id,
        ]);
    }
}
