<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            // konteks: nikah|rujuk|bimwin|legalisasi|konsultasi|tracking|faq|general
            $table->string('context', 32)->index();

            $table->unsignedTinyInteger('rating')->nullable(); // 1..5
            $table->text('comment')->nullable();

            // opsional keterkaitan
            $table->string('registration_code', 32)->nullable()->index();
            $table->string('phone', 32)->nullable()->index();

            // jejak
            $table->string('created_ip', 64)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('feedbacks');
    }
};
