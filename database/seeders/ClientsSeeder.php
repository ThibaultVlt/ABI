<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            [
                'idSect' => 1,
                'raisonSociale' => 'Banque XYZ',
                'adresseClient' => '123 Rue de la Banque',
                'codePostalClient' => '75001',
                'villeClient' => 'Paris',
                'CA' => 1000000,
                'effectif' => 50,
                'telephoneClient' => '01 23 45 67 89',
                'typeClient' => 'Professionnel',
                'natureClient' => 'Entreprise',
                'commentaireClient' => 'Client important',
            ],
            [
                'idSect' => 2,
                'raisonSociale' => 'Automobile ABC',
                'adresseClient' => '456 Rue de l\'Automobile',
                'codePostalClient' => '75002',
                'villeClient' => 'Paris',
                'CA' => 500000,
                'effectif' => 200,
                'telephoneClient' => '01 98 76 54 32',
                'typeClient' => 'Professionnel',
                'natureClient' => 'Entreprise',
                'commentaireClient' => 'Fabricant d\'automobiles',
            ],
            [
                'idSect' => 3,
                'raisonSociale' => 'Industrie DEF',
                'adresseClient' => '789 Rue de l\'Industrie',
                'codePostalClient' => '75003',
                'villeClient' => 'Paris',
                'CA' => 2000000,
                'effectif' => 150,
                'telephoneClient' => '01 11 22 33 44',
                'typeClient' => 'Professionnel',
                'natureClient' => 'Entreprise',
                'commentaireClient' => 'Fabrication de machines industrielles',
            ]
        ]);
    }
}

