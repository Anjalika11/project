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
        Schema::create('register_staff_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('phone_number');
            $table->string('fix_phone_number')->nullable();
            $table->string('email')->nullable();
            $table->date('date_of_joining')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('job_role');
            $table->foreign('job_role')->references('id')->on('job_roles')->onDelete('cascade');
            $table->unsignedBigInteger('branch');
            $table->foreign('branch')->references('id')->on('branches')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_staff_members');
    }
};
