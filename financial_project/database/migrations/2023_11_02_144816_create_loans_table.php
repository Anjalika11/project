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
        Schema::create('loans', function (Blueprint $table) {
            $table->id('id')->startingValue(1000);
            $table->integer('loanID');
            $table->string('CustomLoanId');  
            $table->integer('requested_amount');
            $table->integer('maximum_amount');
            $table->integer('total_amount');
            $table->integer('Previousoutstandingloans');  
            $table->integer('ad_previes_outstand');    
            $table->integer('installment_amount');
            $table->string('loan_type')->nullable();
            $table->string('duration_time');
            $table->integer('interest_rate');
            $table->integer('fixedInterest');   
            $table->string('interest_schema');
            $table->string('payment_method');
            $table->integer('installments_count');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('penalty_status');
            $table->string('promissory_note')->nullable();
            $table->string('comments')->nullable();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->integer('loan_status');
            $table->date('loan_complete_date')->nullable();
            $table->time('loan_complete_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
