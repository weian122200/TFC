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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->string('display');
            $table->string('rearCamera');
            $table->string('batteryCapacity');
            $table->string('processor');
            $table->string('ram');
            $table->string('operatingSystem');
            $table->string('frontCamera');
            $table->string('storage');
            $table->double('price',8,2);
            $table->string('image');
            $table->integer('quantity')->unsigned();
            $table->string('categoryID');
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
