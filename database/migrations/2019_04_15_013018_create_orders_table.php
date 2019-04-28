<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('order_id');
            $table->timestamp('order_date');
            $table->string('customer_name',30)->nullable();
            $table->string('phone',10);
            $table->string('email',50)->nullable();
            $table->string('address',255)->nullable();
            $table->string('province',50)->nullable();
            $table->string('payment_method',50);
            $table->string('descs',255)->nullable();
            $table->string('statuss',30)->nullable();
            $table->double('total');


            $table->timestamps();
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
