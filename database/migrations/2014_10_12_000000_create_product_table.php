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
            $table->string('prod_name', 64);
            $table->string('prod_desc', 255);
            $table->decimal('prod_price', 10, 2);
            $table->decimal('prod_sales_price', 10 , 2);
            $table->string('prod_stock')->comment('Amount of products in stock');
            $table->string('prod_weight')->comment('In kg');
            $table->string('prod_weight_unit')->comment('Array of height, width, length');
            $table->integer('prod_cat')->nullable();
            $table->integer('prod_subcat')->nullable();
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
