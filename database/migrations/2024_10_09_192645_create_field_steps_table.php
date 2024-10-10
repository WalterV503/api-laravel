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
        Schema::create('field_steps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('steps_id');
            $table->string('name', 255);
            $table->string('description', 255);
            $table->boolean('status');
            $table->timestamps();

            //Definimos la clave foranea
            $table->foreign('steps_id')->references('id')->on('steps')->onDelete('cascade');
   

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('field_steps');
    }
};
