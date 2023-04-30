<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shipping_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('cart_id');

            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('city_name');
            $table->string('adress');
            $table->string('postal_code');

            $table->decimal('total_price');
            $table->integer('number');
            $table->integer('exp_month');
            $table->integer('exp_year');
            $table->integer('cvc');


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_infos');
    }
};
