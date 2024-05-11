<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmePorCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filme_por_categorias', function (Blueprint $table) {
            $table->bigIncrements("idFilmePorCategoria");
            $table->unsignedBigInteger("idFilme");
            $table->foreign("idFilme")->references("idFilme")->on("filmes");
            $table->unsignedBigInteger("idCategoria");
            $table->foreign("idCategoria")->references("idCategoria")->on("categorias");
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filme_por_categorias');
    }
}
