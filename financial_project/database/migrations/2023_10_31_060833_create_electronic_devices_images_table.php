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
        Schema::create('electronic_devices_images', function (Blueprint $table) {
            $table->id();
            $table->string('devices_image')->nullable();
            $table->unsignedBigInteger('devices_mortgage_id');
            $table->foreign('devices_mortgage_id')->references('id')->on('electronic_devices')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('electronic_devices_images');
    }
};
