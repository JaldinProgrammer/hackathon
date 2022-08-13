<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fills')->insert([
            [
                'date' => '2022-05-01',
                'time' => '20:00:00',
                'dump_id' => 1
            ],
            [
                'date' => '2022-05-01',
                'time' => '20:00:00',
                'dump_id' => 2
            ],
        ]);
    }
}
