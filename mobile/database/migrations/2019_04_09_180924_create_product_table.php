<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('productid');
            $table->string('productname');
            $table->string('model');
            $table->float('Price');
            $table->string('description');
            $table->string('image');
            $table->integer('producttypeid')->unsigned();
            $table->foreign('producttypeid')->references('producttypeid') ->on('producttypes');
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
        Schema::dropIfExists('product');
    }
}
