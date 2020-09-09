<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->unsignedBigInteger('Klant_ID');
            $table->decimal('Totaal_Bedrag');
            $table->timestamps();
            $table->string('username');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('Klant_ID')
                ->references('ID')
                ->on('klanten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
