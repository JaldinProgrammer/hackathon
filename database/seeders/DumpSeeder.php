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
                'lat' => '-17.776311106874700',
                'long' => '-63.19628834666940',
                'name' => 'MOD256 chupacoto',
                'dump_type_id' => 1,
                'faculty_id' => 1
            ],
            [
                'lat' => '-17.77540390283580',
                'long' => '-63.19446511567480',
                'name' => 'MOD224 chuturubi',
                'dump_type_id' => 1,
                'faculty_id' => 1
            ],
            [
                'lat' => '-17.774194399862600',
                'long' => '-63.19397796658270',
                'name' => 'MOD211 curicusi',
                'dump_type_id' => 2,
                'faculty_id' => 2
            ],
            [
                'lat' => '-17.77381201441100',
                'long' => '-63.196784890613100',
                'name' => 'MOD252 curicusi',
                'dump_type_id' => 2,
                'faculty_id' => 2
            ]
        ]);
    }
}
