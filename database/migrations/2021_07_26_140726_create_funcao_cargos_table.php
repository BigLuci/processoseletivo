<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncaoCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcao_cargos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cargo_processo_id');
            $table->foreign('cargo_processo_id')
                ->references('id')
                ->on('cargo_processos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcao_cargos');
    }
}
