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
                'name' => 'Técnico de enfermagem Generalista',
                'cargo_processo_id' => '1'
            ],

            [
                'name' => 'Técnico de enfermagem Intensivista',
                'cargo_processo_id' => '1'
            ]
        ]);
    }
}
