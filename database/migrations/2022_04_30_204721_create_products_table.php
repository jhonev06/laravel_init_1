<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',45);
            $table->double('price');
            $table->longText('description');
            $table->string('color',45);
            $table->double('quantity');
            $table->double('height');
            $table->double('width');
            $table->double('depth');
            $table->double('weight');
            $table->tinyInteger('active');
            $table->timestamps();

            $table->foreign('categories_id')->references('id')->on('categories');
            $table->foreign('bulks_slug')->references('slug')->on('bulks');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
