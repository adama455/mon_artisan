<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeclarationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        for ($i = 0; $i < 10; $i++) {
            DB::table('declarations')->insert([
                'assurance' => Str::random(10),
                'numero_police' => Str::random(12),
                'nom_complet' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'contact1' => Str::random(9),
                'contact2' => Str::random(9),
                'lieu' => Str::random(8),
                'date' => Carbon::now(),
                'details' => Str::random(20),
            ]);
        }
    }
}
