<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projets')->insert([
            ['codeProjet' => 1, 'abregeProjet' => 'bvn', 'nomProjet' => 'Bienvenue', 'typeProjet' => 'Dev appli'],
            ['codeProjet' => 2, 'abregeProjet' => 'crm', 'nomProjet' => 'CRM', 'typeProjet' => 'Dev web'],
            ['codeProjet' => 3, 'abregeProjet' => 'erp', 'nomProjet' => 'ERP', 'typeProjet' => 'Dev logiciel'],
            ['codeProjet' => 4, 'abregeProjet' => 'web', 'nomProjet' => 'Site Web', 'typeProjet' => 'Dev front-end'],
            ['codeProjet' => 5, 'abregeProjet' => 'app', 'nomProjet' => 'Application mobile', 'typeProjet' => 'Dev mobile'],
        ]);
    }
}
