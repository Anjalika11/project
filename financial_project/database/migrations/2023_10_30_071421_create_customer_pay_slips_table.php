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
        Schema::create('customer_pay_slips', function (Blueprint $table) {
            $table->id();
            $table->string('customer_pay_slip')->nullable();
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('customer_job_incomes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_pay_slips');
    }
};
