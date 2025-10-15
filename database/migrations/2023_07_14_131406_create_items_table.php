<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id('id_item');
            $table->timestamps();
            $table->softDeletes();

            $table->string('name');
            $table->enum('type', ['cottage'])->default('cottage');
            $table->text('description');
            $table->enum('active', ['yes', 'no'])->default('yes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cottage_types');
    }
}
