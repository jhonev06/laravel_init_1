<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->double('quantity');
            $table->string('lote');
            $table->timestamps();
            $table->integer('product_id');
            $table->integer('stock_location_id');
            
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('stock_location_id')->references('id')->on('stock_location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
