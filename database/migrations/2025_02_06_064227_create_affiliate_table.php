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
        Schema::create('affiliates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->constrained('members')->cascadeOnDelete();
            $table->foreignId('agency_id')->constrained('agency')->cascadeOnDelete();
            $table->timestamp('joined_at')->useCurrent();
            $table->softDeletes();
            $table->timestamps();

            // Mencegah duplikasi: satu member hanya bisa di-refer oleh satu agency
            $table->unique('member_id');

            // Index untuk performa query
            $table->index(['agency_id', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliates');
    }
};
