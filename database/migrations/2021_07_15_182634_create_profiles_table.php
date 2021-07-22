<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('rg');
            $table->string('orgao_emissor');
            $table->string('cpf');
            $table->string('sexo')->comment('M/F');
            $table->date('nascimento');
            $table->string('email');
            $table->string('estado_civil');
            $table->string('nacionalidade');
            $table->string('naturalidade');
            $table->string('pis_pasep');
            $table->string('titulo_eleitor');
            $table->string('cert_reservista');
            $table->string('reg_conselho');
            $table->integer('id_escolaridade');
            $table->string('nome_mae');
            $table->string('nome_pai');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('cep');
            $table->string('cidade');
            $table->char('uf');
            $table->integer('id_funcao_cargo');
            $table->string('caminho_rg');
            $table->string('caminho_cpf');
            $table->string('caminho_titulo');
            $table->string('caminho_quitacao');
            $table->string('caminho_pis');
            $table->string('caminho_reservista');
            $table->string('caminho_residencia');
            $table->string('caminho_certidao');
            $table->string('caminho_escolaridade');
            $table->string('caminho_curso');
            $table->string('caminho_registro');
            $table->string('caminho_banco');
            $table->string('experiencia_1');
            $table->integer('meses_1');
            $table->string('caminho_experiencia_1');
            $table->string('experiencia_2');
            $table->integer('meses_2');
            $table->string('caminho_experiencia_2');
            $table->string('experiencia_3');
            $table->integer('meses_3');
            $table->string('caminho_experiencia_3');
            $table->string('numero_inscricao');
            $table->char('contratado');
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('profiles');
    }
}
