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
        Schema::create('demandes_amis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('emitter_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('receiving _user')->references('id')->on('users')->onDelete('cascade');
            $table->enum('statut', ['en_attente', 'acceptee', 'refusee'])->default('en_attente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes_amis');
    }
};
