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
        Schema::create('mortgage_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('costomer_id')->nullable();
            $table->foreign('costomer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->string('mortgage_type')->nullable();
            $table->unsignedBigInteger('loan_id')->nullable();
            $table->foreign('loan_id')->references('id')->on('loans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mortgage_types');
    }
};
