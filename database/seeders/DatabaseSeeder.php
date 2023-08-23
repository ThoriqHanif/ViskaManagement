<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GolDarahSeeder::class);
        $this->call(NilaiSeeder::class);
        $this->call(ClassTypeSeeder::class);
        $this->call(UserTypeSeeder::class);
        $this->call(MyClassSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(StudentRecordSeeder::class);
        $this->call(EkstraSeeder::class);


    }   
}
