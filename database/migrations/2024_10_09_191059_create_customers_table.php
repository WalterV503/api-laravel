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
            $table->string('address', 255);
            $table->string('customer_dui', 255);
            $table->string('customer_name', 255);
            $table->string('customer_gender', 255);
            $table->string('customer_phone', 255);
            $table->string('customer_email', 255);
            $table->string('department', 255);
            $table->string('municipality', 255);
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
