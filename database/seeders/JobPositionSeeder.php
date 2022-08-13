<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_positions')->insert([
            [
                'name' => 'Encargado de facultad'
            ],
            [
                'name' => 'Encargado de modulo'
            ],
            [
                'name' => 'Encargado de area'
            ],
            [
                'name' => 'administrador'
            ]
        ]);

    }
}
