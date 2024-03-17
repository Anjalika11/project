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
        Schema::create('gold_items', function (Blueprint $table) {
            $table->id();
            $table->string('gold_type')->nullable();
            $table->string('Other_gold_item')->nullable();   
            $table->string('gold_pound')->nullable();
            $table->string('weight')->nullable();
            $table->decimal('gold_market_price', 10, 2)->nullable();
            $table->decimal('gold_suggested_price', 10, 2)->nullable();
            $table->text('gold_more')->nullable();
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
        Schema::dropIfExists('gold_items');
    }
};
