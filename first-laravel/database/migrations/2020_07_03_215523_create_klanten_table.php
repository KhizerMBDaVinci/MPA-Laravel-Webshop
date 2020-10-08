<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlantenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klanten', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('Naam');
            $table->string('Achternaam');
            $table->string('Woonplaats');
            $table->string('Straat');
            $table->string('Postcode');
            $table->string('Emailadres');
            $table->string('Telefoonnummer');
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
        Schema::dropIfExists('klanten');
    }
}
