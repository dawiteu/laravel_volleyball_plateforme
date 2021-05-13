<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('continents')->insert([
            [
                "nom"        =>  "Afrique",
                "created_at" =>  now()
            ],
            [
                "nom"        =>  "Antarctique",
                "created_at" =>  now()
            ],
            [
                "nom"        =>  "Asie",
                "created_at" =>  now()
            ],
            [
                "nom"        =>  "Europe",
                "created_at" =>  now()
            ],
            [
                "nom"        =>  "Amérique du nord",
                "created_at" =>  now()
            ],
            [
                "nom"        =>  "Océanie",
                "created_at" =>  now()
            ],
            [
                "nom"        =>  "Amérique du sud",
                "created_at" =>  now()
            ],
        ]);
    }
}
