<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternativesUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatives_units', function (Blueprint $table) {
            $table->integer('product_id');
            $table->string('bulk_slug',2);
            $table->double('quantity')->default(0);
            $table->string('divide_or_multiply',1)->default(0);
            $table->timestamps();
            
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('bulk_slug')->references('slug')->on('bulks');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alternatives_units');
    }
}
