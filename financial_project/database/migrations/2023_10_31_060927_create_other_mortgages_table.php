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
        Schema::create('other_mortgages', function (Blueprint $table) {
            $table->id();
            $table->string('other_title')->nullable();
            $table->decimal('other_market_price', 10, 2)->nullable();
            $table->decimal('other_suggested_price', 10, 2)->nullable();
            $table->text('other_more')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_mortgages');
    }
};
