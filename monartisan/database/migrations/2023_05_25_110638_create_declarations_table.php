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
        Schema::create('declarations', function (Blueprint $table) {
            $table->id();
            $table->string('assurance');
            $table->string('numero_police');
            $table->string('nom_complet');
            $table->string('email')->unique()->nullable();
            $table->string('contact1');
            $table->string('contact2')->nullable();
            $table->string('lieu');
            $table->string('date')->nullable();
            $table->string('details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('declarations');
    }
};
