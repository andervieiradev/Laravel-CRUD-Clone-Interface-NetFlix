<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->longText('sinopse')->nullable();

            $table->string('urlLogo');
            $table->string('urlBackground');

            $table->string('urlThumbVertical');
            $table->string('urlThumbHorizontal');
            $table->string('urlTrailer');

            //Ano de Lançamento
            $table->string('year');
            //Faixa Etária
            $table->string('maturityRating');

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
        Schema::dropIfExists('contents');
    }
}
