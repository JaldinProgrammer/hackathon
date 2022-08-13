<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculty_users')->insert([
            [
                'user_id' => 1,
                'faculty_id' => 1
            ],
            [
                'user_id' => 2,
                'faculty_id' => 1
            ],
            [
                'user_id' => 3,
                'faculty_id' => 2
            ],
            [
                'user_id' => 1,
                'faculty_id' => 4
            ],
        ]);
    }
}
