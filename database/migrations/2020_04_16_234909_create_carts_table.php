<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('product_id');
          $table->unsignedBigInteger('user_id')->nullable();
          $table->unsignedBigInteger('order_id')->nullable();
          $table->string('ip_address')->nullable();
          $table->integer('product_quantity')->default(1);
          $table->timestamps();



        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('product_id')->references('id')->on('products');
        $table->foreign('order_id')->references('id')->on('orders');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
