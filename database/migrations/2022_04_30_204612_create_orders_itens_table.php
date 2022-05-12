<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_itens', function (Blueprint $table) {
            $table->seq();
            $table->integer('orders_id');
            $table->integer('products_id');
            $table->double('quantity');
            $table->double('value');
            $table->double('discount');
            $table->double('percent_discount');

            $table->timestamps();

            $table->foreign('orders_id')->references('id')->on('order');
            $table->foreign('products_id')->references('id')->on('products');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_itens');
    }
}
