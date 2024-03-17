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
        Schema::create('other_mortgage_images', function (Blueprint $table) {
            $table->id();
            $table->string('other_image')->nullable();
            $table->unsignedBigInteger('other_mortgage_id');
            $table->foreign('other_mortgage_id')->references('id')->on('other_mortgages')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_mortgage_images');
    }
};
