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
        Schema::create('agency', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->constrained('members')->cascadeOnDelete();
            $table->string('sapaan');
            $table->string('nama');
            $table->string('telepon');
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('negara')->nullable();
            $table->string('kota_id')->nullable();
            $table->string('kode_pos')->nullable();
            $table->text('alamat')->nullable();
            $table->string('photo')->nullable();
            $table->string('status')->default('active');
            $table->string('agency_code')->unique();
            $table->string('slug')->unique();

            $table->softDeletes();
            $table->timestamps();

            // Index untuk performa pencarian berdasarkan agency_code
            $table->index('agency_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agency');
    }
};
