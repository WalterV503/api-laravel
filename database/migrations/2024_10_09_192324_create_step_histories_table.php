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
        Schema::create('step_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('complains_id');
            $table->unsignedBigInteger('steps_id');
            $table->timestamps();

            //DECLARAMOS LAS FORANEAS
            $table->foreign('complains_id')->references('id')->on('complains')->onDelete('cascade');
            $table->foreign('steps_id')->references('id')->on('steps')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('step_histories');
    }
};
