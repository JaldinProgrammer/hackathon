<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DumpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dumps')->insert([
            [
                'lat' => '17.65323',
                'long' => '33.3234242',
                'name' => 'chuturubi',
                'dump_type_id' => 1,
                'faculty_id' => 1
            ],
            [
                'lat' => '17.65323',
                'long' => '33.3234242',
                'name' => 'veneciali',
                'dump_type_id' => 1,
                'faculty_id' => 1
            ],
            [
                'lat' => '17.65323',
                'long' => '33.3234242',
                'name' => 'coperacha',
                'dump_type_id' => 2,
                'faculty_id' => 2
            ]
        ]);
    }
}
