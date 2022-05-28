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
            $table->double('price')->default(0);
            $table->longText('description')->nullable();
            $table->string('color',45)->nullable();
            $table->double('qtd')->default(0);
            $table->double('height')->default(0);
            $table->double('width')->default(0);
            $table->double('depth')->default(0);
            $table->double('weight')->default(0);
            $table->integer('category_id');
            $table->string('bulk_slug');
            $table->tinyInteger('active')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('products');
    }
}
