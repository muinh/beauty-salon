<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('code');
            $table->string('main_image');
            $table->text('features');
            $table->integer('category_id');
            $table->integer('line_id');
            $table->integer('designer_id');
            $table->integer('brand_id');
            $table->string('images')->default('[]');
            $table->string('materials');
            $table->string('dimensions_inch');
            $table->string('dimensions_cm');
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
        Schema::drop('products');
    }
}
