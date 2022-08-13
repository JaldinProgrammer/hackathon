<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DumpTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dump_types')->insert([
            [
                'name' => 'Basurero chico REY',
                'dimension' => 45.5,
                'materia' => 'plastico'
            ],
            [
                'name' => 'Basurero mediano CISCOPLAS',
                'dimension' => 65.5,
                'materia' => 'metal'
            ],
            [
                'name' => 'Basurero grande REY',
                'dimension' => 75.5,
                'materia' => 'plastico'
            ],
        ]);
    }
}

