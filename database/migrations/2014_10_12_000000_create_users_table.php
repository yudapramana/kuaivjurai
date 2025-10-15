<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('plain_password')->nullable();
            $table->enum('block', ['no', 'yes'])->default('no');
            $table->enum('status', ['inactive', 'active'])->default('active');
            $table->string('nip', 20)->nullable();
            $table->string('no_hp')->nullable();
            $table->text('profile_photo')->nullable();
            $table->integer('current_role_id')->nullable();
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
            $table->string('created_by')->default('');
            $table->string('updated_by')->default('');
            $table->datetime('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
