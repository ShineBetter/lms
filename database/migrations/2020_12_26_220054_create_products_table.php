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
            $table->string('product_name');
            $table->bigInteger('product_price')->nullable();
            $table->bigInteger('product_discount')->nullable();
            $table->string('product_img')->nullable();
            $table->string('product_short_desc')->nullable();
            $table->text('product_desc')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->string('product_file')->nullable();
            $table->bigInteger('product_count')->nullable();
            $table->bigInteger('product_status')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
