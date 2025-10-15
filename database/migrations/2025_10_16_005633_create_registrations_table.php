<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            // jenis layanan: nikah, rujuk, bimwin, legalisasi, konsultasi
            $table->string('type', 32)->index();
            // kode unik mis. NKH-XXXXXX, RJK-XXXXXX, dll
            $table->string('code', 32)->unique();

            // ringkasan identitas
            $table->string('name_1')->nullable();      // nama suami / pemohon / penanggung jawab
            $table->string('name_2')->nullable();      // nama istri / pasangan
            $table->string('phone', 32)->nullable()->index(); // nomor WA/HP

            // info jadwal & lokasi
            $table->date('scheduled_at')->nullable();
            $table->string('location', 64)->nullable();   // 'kua' | 'luar' | label lain

            // status/progress
            $table->string('status', 32)->default('pending')->index(); // pending|verifying|approved|rejected|cancelled
            $table->unsignedTinyInteger('progress')->default(0);       // 0-100
            $table->text('note')->nullable();                          // catatan petugas

            // payload mentah (hasil slot-filling chat)
            $table->json('payload')->nullable();

            // jejak
            $table->string('created_ip', 64)->nullable();
            $table->timestamps();

            // index gabungan untuk pencarian cepat
            $table->index(['type', 'status']);
        });
    }

    public function down(): void {
        Schema::dropIfExists('registrations');
    }
};
