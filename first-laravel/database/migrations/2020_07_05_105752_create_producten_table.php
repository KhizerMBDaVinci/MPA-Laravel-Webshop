<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producten', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('Naam');
            $table->text('Beschrijving');
            $table->decimal('Prijs');
            $table->unsignedBigInteger('Categorie_ID');
            $table->string('Image_Nr');
        });

        Schema::table('producten', function (Blueprint $table) {
            $table->foreign('Categorie_ID')
                ->references('ID')
                ->on('categorieen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producten');
    }
}
