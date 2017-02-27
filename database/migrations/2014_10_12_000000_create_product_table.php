<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->string('prod_name');
            $table->string('prod_desc');
            $table->string('prod_price');
            $table->string('prod_sales_price');
            $table->string('prod_stock')->comment('Amount of products in stock');
            $table->string('prod_weight')->comment('In kg');
            $table->string('prod_weight_unit')->comment('Array of height, width, length');
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
