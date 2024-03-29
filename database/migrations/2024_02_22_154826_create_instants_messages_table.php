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
        Schema::create('instants_messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('emitter_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('receiving _user')->references('id')->on('users')->onDelete('cascade');
            $table->text('content');
            $table->timestamp('date_sent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instants_messages');
    }
};
