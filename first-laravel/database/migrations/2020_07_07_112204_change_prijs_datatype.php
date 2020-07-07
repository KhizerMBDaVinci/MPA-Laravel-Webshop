<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangePrijsDatatype extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('producten');

        Schema::create('producten', function (Blueprint $table){
            $table->bigIncrements('ID');
            $table->string('Naam');
            $table->text('Beschrijving');
            $table->decimal('Prijs');
            $table->unsignedBigInteger('Categorie_ID');
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
        //
    }
}
