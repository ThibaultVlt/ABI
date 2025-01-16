<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SecteurActiviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('secteur_activite')->delete();

        DB::table('secteur_activite')->insert([
            ['IDSECT' => 1, 'ACTIVITE' => 'Banque'],
            ['IDSECT' => 2, 'ACTIVITE' => 'Automobile'],
            ['IDSECT' => 3, 'ACTIVITE' => 'Industrie'],
            ['IDSECT' => 4, 'ACTIVITE' => 'Association'],
            ['IDSECT' => 5, 'ACTIVITE' => 'Nature'],
        ]);
    }
}
