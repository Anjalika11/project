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
        Schema::create('vehicle_book_images', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_book_image')->nullable();
            $table->unsignedBigInteger('vehicle_mortgage_id');
            $table->foreign('vehicle_mortgage_id')->references('id')->on('vehicle_mortgages')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_book_images');
    }
};
