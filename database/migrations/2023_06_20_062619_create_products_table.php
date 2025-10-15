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
            $table->id('id_product');
            $table->timestamps();

            $table->text('cover_image_url')->nullable();
            $table->unsignedInteger('id_service');
            $table->string('title_id', 100)->nullable();
            $table->string('title_en', 100)->nullable();
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->text('next_url')->nullable();
            $table->string('slug', 50)->nullable();


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
