<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->unsignedBigInteger('Order_ID');
            $table->unsignedBigInteger('Product_ID');
            $table->decimal('Prijs');
            $table->decimal('Aantal');
        });

        Schema::table('order_details', function (Blueprint $table) {
            $table->foreign('Order_ID')
                ->references('ID')
                ->on('orders');

            $table->foreign('Product_ID')
                ->references('ID')
                ->on('producten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
