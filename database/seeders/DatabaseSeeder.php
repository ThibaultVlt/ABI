<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ClientsSeeder;
use Database\Seeders\ContactSeeder;
use Database\Seeders\ProjetsSeeder;
use Database\Seeders\FonctionSeeder;
use Database\Seeders\CommanderSeeder;
use Database\Seeders\SecteurActiviteSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            SecteurActiviteSeeder::class,
            ProjetsSeeder::class,
            FonctionSeeder::class,
            ClientsSeeder::class,
            ContactSeeder::class,
            CommanderSeeder::class,
        ]);
    }
}
