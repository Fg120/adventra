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
<<<<<<<< HEAD:database/migrations/2023_04_08_093241_add_column_to_users_table.php
        Schema::table('users', function (Blueprint $table) {
            $table->drop(['name']);
========
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');
            $table->string('desc');
            $table->string('photo');
            $table->string('stock_available');
            $table->string('stock_true');
            $table->timestamps();
>>>>>>>> 5c9d7987ff36c87bbcd4f8c4c3011b1b3011c7b4:database/migrations/2023_03_28_000331_create_products_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<<< HEAD:database/migrations/2023_04_08_093241_add_column_to_users_table.php
        Schema::table('users', function (Blueprint $table) {
            Schema::table('users', function (Blueprint $table) {
                $table->drop(['name']);
            });
        });
========
        Schema::dropIfExists('products');
>>>>>>>> 5c9d7987ff36c87bbcd4f8c4c3011b1b3011c7b4:database/migrations/2023_03_28_000331_create_products_table.php
    }
};
