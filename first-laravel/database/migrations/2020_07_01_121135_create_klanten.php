<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlanten extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Klanten', function (Blueprint $table) {
            $table->id('Klant_ID');
            $table->string('Voornaam');
            $table->string('Achternaam');
            $table->string('Woonplaats');
            $table->string('Straat');
            $table->string('Postcode');
            $table->string('Telefoonnummer');
            $table->string('E-mailadres');
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
