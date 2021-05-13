<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tb1Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_order', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->string('c_name');
            $table->string('c_address');
            $table->string('c_phone');
            $table->string('c_email')->nullable();
            $table->string('note')->nullable();
            $table->integer('total');
            $table->string('payment');
            $table->string('status')->default('0');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('NULL ON UPDATE CURRENT_TIMESTAMP'))->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb1_order');
    }
}
