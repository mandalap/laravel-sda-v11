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
        Schema::create('developers', function (Blueprint $table) {
            $table->id();
             $table->foreignId('member_id')->constrained()->cascadeOnDelete();
             $table->string('nama');
             $table->string('thumbnail')->nullable();
             $table->string('alamat')->nullable();
             $table->string('telepon')->nullable();
             $table->string('email')->nullable();
             $table->string('slug')->nullable();
             $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developers');
    }
};
