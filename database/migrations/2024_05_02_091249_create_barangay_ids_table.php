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
        Schema::create('barangay_ids', function (Blueprint $table) {
            $table->id();
            $table->string('brgy_id');
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('gender');
            $table->string('age');
            $table->string('email');
            $table->string('address');
            $table->string('apartment')->nullable();
            $table->string('city');
            $table->string('province');
            $table->string('zipCode');
            $table->string('contactNumber');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangay_ids');
    }
};
