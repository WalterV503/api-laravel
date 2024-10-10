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
        Schema::create('complains', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('steps_id');
            $table->unsignedBigInteger('provider_id');
            $table->unsignedBigInteger('customer_id');
            $table->date('complain_reception_date');
            $table->date('complain_resolution_date');
            $table->date('complain_expiration_date');
            $table->string('complain_origin', 255);
            $table->boolean('complain_status');
            $table->string('complain_action', 255);
            $table->string('complain_detail_reason', 255);
            $table->string('complain_detail_description', 255);
            $table->timestamps();

            //DECLARANDO CLAVES FORANEAS
            $table->foreign('steps_id')->references('id')->on('steps')->onDelete('cascade');
            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complains');
    }
};
