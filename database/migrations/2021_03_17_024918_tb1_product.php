<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tb1Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_product', function (Blueprint $table) {
            $table->id();
            $table->string("product_name");
            $table->string("product_price");
            $table->string("product_image");
            $table->integer("brand_id");
            $table->integer("category_id");
            $table->text("product_content");
            $table->integer("product_stt");
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
        Schema::dropIfExists('tb1_product');
    }
}
