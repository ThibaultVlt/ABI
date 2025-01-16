<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FonctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fonction')->insert([
            [
                'FONCTION' => 'Chef de projet'
            ],
            [
                'FONCTION' => 'Gérant'
            ],
            [
                'FONCTION' => 'Développeur'
            ],
        ]);
    }
}
