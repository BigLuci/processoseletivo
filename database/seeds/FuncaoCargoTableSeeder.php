<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuncaoCargoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('funcao_cargos')->insert([
            [
                'name' => 'Técnico de enfermagem Generalista'
            ],

            [
                'name' => 'Técnico de enfermagem Intensivista'
            ]
        ]);
    }
}
