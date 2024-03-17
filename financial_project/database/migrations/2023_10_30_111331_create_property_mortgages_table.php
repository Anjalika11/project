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
        Schema::create('property_mortgages', function (Blueprint $table) {
            $table->id();
            $table->string('property_type')->nullable();
            $table->string('property_province')->nullable();
            $table->string('property_district')->nullable();
            $table->string('property_address')->nullable();
            $table->string('property_state')->nullable();
            $table->decimal('property_assessed_value', 10, 2)->nullable();
            $table->decimal('property_suggested_value', 10, 2)->nullable();
            $table->string('property_postal_code')->nullable();
            $table->string('property_land_size', 8, 2)->nullable();
            $table->string('property_size_sqft')->nullable();
            $table->integer('property_bed_rooms')->nullable();
            $table->text('property_more')->nullable();
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
        Schema::dropIfExists('property_mortgages');
    }
};
