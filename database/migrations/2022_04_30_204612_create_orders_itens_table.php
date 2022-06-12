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
            $table->integer('seq')->primary(); // qual valor padrao?
            $table->integer('order_id');
            $table->integer('product_id');
            $table->double('quantity')->default(0);
            $table->double('value')->default(0);
            $table->double('discount')->default(0);
            $table->double('percent_discount')->default(0);
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('product_id')->references('id')->on('products');
            
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
