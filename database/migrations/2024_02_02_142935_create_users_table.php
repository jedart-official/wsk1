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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('avatar_id');
            $table->unsignedBigInteger('room_id')->nullable();
            $table->integer('x')->nullable();
            $table->integer('y')->nullable();
            $table->timestamps();

            $table->foreign('room_id')->on('rooms')->references('id');
            $table->foreign('avatar_id')->on('avatars')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
