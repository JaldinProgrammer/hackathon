<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $this->call(JobPositionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DumpTypeSeeder::class);
        $this->call(TrashTypeSeeder::class);
        $this->call(FacultySeeder::class);
        $this->call(TrashSampleSeeder::class);
        $this->call(FacultyUserSeeder::class);
        $this->call(DumpSeeder::class);
        $this->call(FillSeeder::class);
    }
}
