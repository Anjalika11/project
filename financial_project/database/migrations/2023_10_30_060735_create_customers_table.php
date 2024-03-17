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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('address');
            $table->string('contactNumber');
            $table->string('contactNumberFixed')->nullable();
            $table->string('gender');
            $table->string('nic');
            $table->string('email')->nullable();
            $table->string('account_no')->nullable();
            $table->string('bankName')->nullable();
            $table->string('branchname')->nullable();
            $table->string('incomeSource')->nullable();
            $table->string('monthlygrossincome')->nullable();
            $table->string('monthlyExpenses')->nullable();
            $table->text('detailspreviousloans')->nullable();
            $table->string('loanType');
            $table->string('requestedAmount');
            $table->string('paymentMethod');
            $table->integer('loanStatus');
            $table->string('mortgage_type');
            $table->string('mortgage_sub_type')->nullable();
            $table->unsignedBigInteger('branch_id');
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->unsignedBigInteger('collector_id')->nullable();
            $table->foreign('collector_id')->references('id')->on('register_staff_members');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
