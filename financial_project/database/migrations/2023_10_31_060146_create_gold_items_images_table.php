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
        Schema::create('gold_items_images', function (Blueprint $table) {
            $table->id();
            $table->string('gold_image')->nullable();
            $table->unsignedBigInteger('gold_mortgage_id');
            $table->foreign('gold_mortgage_id')->references('id')->on('gold_items')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gold_items_images');
    }
};
