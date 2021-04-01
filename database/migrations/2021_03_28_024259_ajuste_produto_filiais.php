<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteProdutoFiliais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Criando tabela filiais
        Schema::create('filiais', function (Blueprint $table) {
            $table->id();
            $table->string('filial', 30);
            $table->timestamps();
        });

        //criando tabela auxiliar
        Schema::create('produto_filiais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produto_id');
            $table->unsignedBigInteger('filiais_id');
            $table->float('precovenda', 8, 2)->default(0.01);
            $table->integer('estoquemin');
            $table->integer('estoquemax');
            $table->timestamps();

            //chaves estrangeiras
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->foreign('filiais_id')->references('id')->on('filiais');
        });

        //Removendo colunas da tabela produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn(['precovenda', 'estoquemin', 'estoquemax']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //remove colunas da tabela produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->float('precovenda', 8, 2);
            $table->integer('estoquemin');
            $table->integer('estoquemax');
        });
        Schema::dropIfExists('produto_filiais');
        Schema::dropIfExists('filiais');
    }
}