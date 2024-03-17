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
        Schema::create('electronic_devices', function (Blueprint $table) {
            $table->id();
            $table->string('devices_type')->nullable();
            $table->string('devices_brand')->nullable();
            $table->string('devices_model')->nullable();
            $table->decimal('devices_market_price', 10, 2)->nullable();
            $table->decimal('devices_suggested_price', 10, 2)->nullable();
            $table->text('devices_more')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            // $table->unsignedBigInteger('loan_id')->nullable();
            // $table->foreign('loan_id')->references('id')->on('loans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('electronic_devices');
    }
};
