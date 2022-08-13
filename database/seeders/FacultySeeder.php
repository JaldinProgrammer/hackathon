<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculties')->insert([
            [
                'name' => 'Ciencias de la computacion'
            ],
            [
                'name' => 'tecnologia'
            ],
            [
                'name' => 'Financiera'
            ],
            [
                'name' => 'Contaduria'
            ],
            [
                'name' => 'Comunicacion'
            ],
            [
                'name' => 'Ciencias empresariales'
            ]
        ]);
    }
}
