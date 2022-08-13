<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrashTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trash_types')->insert([
            [
                'name' => 'plasticos'
            ],
            [
                'name' => 'vidrio'
            ],
            [
                'name' => 'metalico'
            ],
            [
                'name' => 'carton'
            ]
        ]);
    }
}
