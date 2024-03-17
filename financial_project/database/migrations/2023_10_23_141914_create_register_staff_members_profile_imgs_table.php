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
        Schema::create('register_staff_members_profile_imgs', function (Blueprint $table) {
            $table->id();
            $table->string('staff_profile_img')->nullable();
            $table->unsignedBigInteger('staff_id');
            $table->foreign('staff_id')->references('id')->on('register_staff_members')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_staff_members_profile_imgs');
    }
};
