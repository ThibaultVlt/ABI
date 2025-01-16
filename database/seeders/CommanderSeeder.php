<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommanderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commander')->insert([
            [
                'IDCLIENT' => 1,
                'CODEPROJET' => 1,
            ],
            [
                'IDCLIENT' => 2,
                'CODEPROJET' => 2,
            ],
            [
                'IDCLIENT' => 3,
                'CODEPROJET' => 3,
            ]
        ]);
    }
}
