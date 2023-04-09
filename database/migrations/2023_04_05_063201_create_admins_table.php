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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_konfirmasi')->nullable();
            $table->string('password');
            $table->string('id_photo')->nullable();
            $table->string('address')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('phone_number')->nullable();
            $table->enum('role', ['store', 'admin'])->default('store');
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
        Schema::dropIfExists('admins');
    }
};
