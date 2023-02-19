<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_orgao')->constrained('orgaos');
            $table->string('descricao');
            $table->string('cep')->nullable();
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('complemento')->nullable();
            $table->string('municipio')->nullable();
            $table->string('uf')->nullable();
            $table->string('setor')->nullable();
            $table->string('quadra')->nullable();
            $table->string('lote')->nullable();
            $table->string('area_terreno')->nullable();
            $table->string('area_construida')->nullable();
            $table->string('valor_terreno')->nullable();
            $table->string('valor_edificado')->nullable();
            $table->string('valor_imovel')->nullable();
            $table->string('matricula')->nullable();
            $table->string('gleba')->nullable();
            $table->foreignId('id_usuario')->constrained('users');
            $table->foreignId('id_situacao_imovel')->constrained('imoveis_situacoes');
            $table->foreignId('id_tipo_imovel')->constrained('imoveis_tipos');
            $table->foreignId('id_uso_imovel')->constrained('imoveis_ocupacoes');
            $table->foreignId('id_categoria_imovel')->constrained('imoveis_categorias');
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
        Schema::dropIfExists('imoveis');
    }
};
