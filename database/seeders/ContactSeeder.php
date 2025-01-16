<?php

namespace Database\Seeders;

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
        DB::table('contacts')->insert([
            [
                'idClient' => 1,
                'idFonc' => 1, // Exemple d'ID pour une fonction
                'nomContact' => 'Dupont',
                'prenomContact' => 'Pierre',
                'telContact' => '0123456789',
                'emailContact' => 'pierre.dupont@example.com',
                'duree' => 5
            ],
            [
                'idClient' => 2,
                'idFonc' => 2, // Exemple d'ID pour une autre fonction
                'nomContact' => 'Martin',
                'prenomContact' => 'Sophie',
                'telContact' => '0987654321',
                'emailContact' => 'sophie.martin@example.com',
                'duree' => 3
            ],
            [
                'idClient' => 3,
                'idFonc' => 1, // ID de fonction exemple
                'nomContact' => 'Durand',
                'prenomContact' => 'Luc',
                'telContact' => '0147258369',
                'emailContact' => 'luc.durand@example.com',
                'duree' => 2
            ],
        ]);
    }
}
