<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipes')->insert([
            "nom"          => "Pas d'équipe", 
            "ville"        => "-", 
            "pays"         => "-", 
            "max"          => 10000, 
            "ATT"          => 0, 
            "CT"           => 0, 
            "DC"           => 0, 
            "RP"           => 0, 
            "continent_id" => 1,
        ]);
    }
}
