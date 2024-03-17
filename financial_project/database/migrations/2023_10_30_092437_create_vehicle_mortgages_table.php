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
        Schema::create('vehicle_mortgages', function (Blueprint $table) {
            $table->id();
            $table->string('auto_vehicle_category')->nullable();
            $table->string('auto_vehicle_brand')->nullable();
            $table->string('auto_vehicle_model')->nullable();
            $table->string('auto_vehicle_year')->nullable();
            $table->string('auto_vehicle_mileage')->nullable();
            $table->string('auto_vehicle_engine_capacity')->nullable();
            $table->decimal('auto_vehicle_market_price', 10, 2)->nullable();
            $table->decimal('auto_vehicle_suggested_price', 10, 2)->nullable();
            $table->string('auto_vehicle_engine_number')->nullable();
            $table->text('auto_vehicle_more')->nullable();
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
        Schema::dropIfExists('vehicle_mortgages');
    }
};
