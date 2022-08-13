<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrashSampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trash_samples')->insert([
            [
                'date' => '2022-08-12',
                'time' => '06:00:00',
                'trash_type_id' => 1,
                'faculty_id' => 1,
                'image' => 'as'
            ],
            [
                'date' => '2022-09-12',
                'time' => '06:01:00',
                'trash_type_id' => 1,
                'faculty_id' => 1,
                'image' => 'as'
            ],
            [
                'date' => '2022-10-12',
                'time' => '06:02:00',
                'trash_type_id' => 1,
                'faculty_id' => 1,
                'image' => 'as'
            ],
            [
                'date' => '2022-11-12',
                'time' => '06:03:00',
                'trash_type_id' => 2,
                'faculty_id' => 1,
                'image' => 'as'
            ],
            [
                'date' => '2022-12-12',
                'time' => '06:04:00',
                'trash_type_id' => 1,
                'faculty_id' => 1,
                'image' => 'as'
            ],
        ]);
    }
}
