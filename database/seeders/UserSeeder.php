<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Carlos Jaldin',
                'isLeader' => true,
                'email' => 'jaldin@gmail.com',
                'password' => Hash::make('123'),
                'job_position_id' => 4
            ],
            [
                'name' => 'Erick Patton',
                'isLeader' => false,
                'email' => 'erick@gmail.com',
                'password' => Hash::make('123'),
                'job_position_id' => 2
            ],
            [
                'name' => 'Valeria Coronado',
                'isLeader' => false,
                'email' => 'valeria@gmail.com',
                'password' => Hash::make('123'),
                'job_position_id' => 1
            ],
            [
                'name' => 'Dalia Monsanto',
                'isLeader' => false,
                'email' => 'dalia@gmail.com',
                'password' => Hash::make('123'),
                'job_position_id' => 3
            ],
            [
                'name' => 'Bianca Foianini',
                'isLeader' => false,
                'email' => 'bianca@gmail.com',
                'password' => Hash::make('123'),
                'job_position_id' => 2
            ],
        ]); 
    }
}
