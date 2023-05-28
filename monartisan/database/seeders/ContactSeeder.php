<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        for ($i = 0; $i < 10; $i++) {
            DB::table('contact')->insert([
                'telephone' =>Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'message' =>Str::random(10),
            ]);
        }
    }
}
