<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSysStaticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_statics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('static_name',50);
            $table->string('static_value_first',2500)->nullable();
            $table->string('static_value_second',2500)->nullable();
            $table->string('static_value_third',2500)->nullable();
            $table->string('static_value_forth',2500)->nullable();
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
        Schema::dropIfExists('sys_statics');
    }
}
