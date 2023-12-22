<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Administrator",
            'email' => 'anantadwi.desrianti2003@gmail.com',
            'password' => Hash::make('30122003'),
            // 'level' => 'admin',
        ]);
    }
}
