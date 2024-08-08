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
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address_city');
            $table->string('address_street');
            $table->string('address_number');
            $table->timestamps();
            $table->unique('email');
        });

        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id');
            $table->string('name');
            $table->unsignedInteger('age');
            $table->string('species');
            $table->string('breed');
            $table->string('color');
            $table->string('gender');
            $table->decimal('weight');
            $table->timestamps();
            $table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
        Schema::dropIfExists('owners');
    }
};
