<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => '1',
                'nama' => 'Cahyo',
                'no_telp' => '082251713841'
            ]
        ];

        DB::table('admins')->insert($data);
    }
}
