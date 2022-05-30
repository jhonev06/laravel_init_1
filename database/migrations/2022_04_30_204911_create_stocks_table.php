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
            $table->id(); // a migration sempre tem um ID ? o esboço do banco não tem ID
            $table->double('qtd')->default(0);
            $table->string('lote');            
            $table->integer('product_id')->default(0);// foreign key
            $table->integer('stock_location_id')->default(0);// foreign key
            $table->timestamps();
            
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
