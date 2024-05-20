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
     */
    public function run(): void
    {
        $data = [
            [
                'username' => 'admin',
                'password' => Hash::make('12345'),
                'level' => 'admin'
            ],
            [
                'username' => 'anggota',
                'password' => Hash::make('123456'),
                'level' => 'anggota'
            ],
        ];

        DB::table('users')->insert($data);
    }
}
