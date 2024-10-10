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
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('step_history_id', 255);
            $table->string('uid', 255);
            $table->string('file_path', 255);
            $table->string('file_name', 255);
            $table->string('file_type', 255);
            $table->string('file_size', 255);
            $table->boolean('status');
            $table->timestamps();

            //Definimos las claves foraneas
            $table->foreign('step_history_id')->references('id')->on('step_histories')->onDelete('cascade');

  
            // $table->foreign('complains_id')->references('id')->on('complains')->onDelete('cascade');
            // $table->foreign('steps_id')->references('id')->on('steps')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attachments');
    }
};
