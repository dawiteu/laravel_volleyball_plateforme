<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                "nom" => "ATT", 
                "created_at" => now()
            ],
            [
                "nom" => "CT", 
                "created_at" => now()
            ],
            [
                "nom" => "DC", 
                "created_at" => now()
            ],
            [
                "nom" => "RP", 
                "created_at" => now()
            ],
        ]);
    }
}
