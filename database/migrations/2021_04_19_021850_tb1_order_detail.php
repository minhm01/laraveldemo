<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tb1OrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_order_detail', function (Blueprint $table) {
            $table->bigIncrements('order_detail_id');
            $table->integer('order_id');
            $table->string('product_name');
            $table->integer('product_id');
            $table->string('product_image');
            $table->integer('qty');
            $table->integer('sum');
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
        Schema::dropIfExists('tb1_order_detail');
    }
}
