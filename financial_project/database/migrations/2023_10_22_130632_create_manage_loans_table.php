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
        Schema::create('manage_loans', function (Blueprint $table) {
            $table->id();
            $table->string('loan_name');
            $table->decimal('total_payment', 25,2);
            $table->text('message')->nullable();
            $table->string('time_input');
            $table->decimal('interest_percentage', 25,2);
            $table->decimal('amount', 25, 2);
            $table->string('interest_schema');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manage_loans');
    }
};
