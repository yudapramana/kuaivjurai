<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id('id_service');
            $table->timestamps();

            $table->text('cover_image_url')->nullable();
            $table->text('content_image_url')->nullable();
            $table->text('next_url')->nullable();
            $table->string('title_id', 100)->nullable();
            $table->string('title_en', 100)->nullable();
            $table->string('name', 100);
            $table->string('slug', 50)->nullable();
            $table->enum('featured', ['no', 'yes'])->default('no');
            $table->enum('listed', ['no', 'yes'])->default('yes');
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
