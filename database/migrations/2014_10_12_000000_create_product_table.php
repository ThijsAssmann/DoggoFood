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
            $table->increments('id');
            $table->string('name', 64);
            $table->string('desc', 255);
            $table->decimal('price', 10, 2);
            $table->decimal('sales_price', 10 , 2);
            $table->string('stock')->comment('Amount of products in stock');
            $table->string('weight')->comment('In kg');
            $table->string('weight_unit')->comment('Array of height, width, length');
            $table->string('cat')->nullable();
            $table->string('subcat')->nullable();
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
