<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->integer('user_id');
            $table->date('date');
            $table->string('type',1);
            $table->string('status',1);
            $table->integer('customers_id');
            $table->string('observation',200);
            $table->integer('type_payments_id');
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('customers_id')->references('id')->on('customers');
            $table->foreign('type_payments_id')->references('id')->on('type_payments');
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
