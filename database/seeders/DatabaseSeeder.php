<?php

namespace Database\Seeders;

use App\Models\Continent;
use App\Models\Equipe;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GenreSeeder::class,
            RoleSeeder::class,
            ContinentSeeder::class,
            EquipeSeeder::class
        ]);
    }
}
