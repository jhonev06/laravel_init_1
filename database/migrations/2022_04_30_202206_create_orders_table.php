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
            $table->integer('number')->default(0);
            //$table->integer('user_id');// foreign key?
            $table->date('date');
            //$table->string('type',1);
            //$table->string('status',1);
            //$table->integer('customer_id');// foreign key?
            $table->string('observation',200)->nullable();
           // $table->integer('type_payment_id');// foreign key
            $table->timestamps();
            
            //$table->foreign('user_id')->references('id')->on('users');
            //$table->foreign('customer_id')->references('id')->on('customers');
           // $table->foreign('type_payment_id')->references('id')->on('type_payments');
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
