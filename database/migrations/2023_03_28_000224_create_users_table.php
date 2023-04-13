<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('email')->unique();
            $table->timestamp('email_konfirmasi')->nullable();
            $table->string('phone_number')->unique();
            $table->string('password');
            $table->string('province')->nullable();
            $table->string('regency')->nullable();
            $table->string('city')->nullable();
            $table->string('village')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('id_photo')->nullable();
            $table->string('nik')->nullable();
            $table->string('transaction_history')->nullable();
            $table->timestamps();
            $table->enum('role', ['user', 'store', 'admin'])->default('user');
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
};
