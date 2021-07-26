<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargoProcessoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('cargo_processos')->insert([

            [
                'name' => 'Técnico de Enfermagem'
            ]
        ]);
    }
}
