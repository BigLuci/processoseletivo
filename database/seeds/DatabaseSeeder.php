<?php

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
         $this->call(CargoProcessoTableSeeder::class);
         $this->call(FuncaoCargoTableSeeder::class);
         $this->call(EscolaridadeTableSeeder::class);
         $this->call(EstadoCivilTableSeeder::class);
         $this->call(ProfilesTableSeeder::class);
    }
}
