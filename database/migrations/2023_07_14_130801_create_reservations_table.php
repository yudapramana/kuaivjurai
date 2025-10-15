<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('id_reservation');
            $table->timestamps();
            $table->softDeletes();

            $table->integer('year');
            $table->integer('month');
            $table->date('checkin_date');
            $table->string('customer_name');
            $table->string('customer_phone')->nullable();
            $table->integer('total_guest')->nullable();
            $table->integer('fix_price')->nullable();
            $table->integer('down_payment')->nullable();
            $table->text('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
