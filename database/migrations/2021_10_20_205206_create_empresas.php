<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            //EMPRESA
            $table->id();
            $table->string('cnpj');
            $table->string('nome_fantasia');
            $table->string('razao_social');
            $table->string('data_inicio_atividade');
            $table->string('cnae_fiscal');
            $table->string('descricao_matriz_filial');
            $table->string('endereco');
            //CONTATOS
            $table->string('nome_contato')->nullable();
            $table->string('email')->nullable();
            $table->string('tel_fixo')->nullable();
            $table->string('tel_celular')->nullable();

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
        Schema::dropIfExists('empresas');
    }
}
