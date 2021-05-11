<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                "type" => "femme", 
                "created_at" => now()
            ], 
            [
                "type" => "homme", 
                "created_at" => now()
            ], 
            [
                "type" => "autre", 
                "created_at" => now()
            ]          
        ]);
    }
}
