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
        Schema::create('detailed_step_informations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('step_history_id');
            $table->unsignedBigInteger('steps_id');
            $table->string('field_value', 255);
            $table->timestamps();

            $table->foreign('step_history_id')->references('id')->on('step_histories')->onDelete('cascade');
            $table->foreign('steps_id')->references('id')->on('steps')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailed_step_informations');
    }
};
