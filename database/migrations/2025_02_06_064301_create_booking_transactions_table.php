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
        Schema::create('booking_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->constrained()->cascadeOnDelete();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('agency_id')->nullable();
            $table->foreign('agency_id')->references('id')->on('agency')->nullOnDelete()->onUpdate('cascade');
            // $table->string('agency_id')->nullable();
            $table->string('invoice')->nullable();
            $table->unsignedBigInteger('jumlah_uang_booking')->nullable();
            $table->unsignedBigInteger('harga_tanah');
            $table->unsignedBigInteger('diskon')->nullable();
            $table->unsignedBigInteger('total_harga');
            $table->boolean('is_paid');
            $table->datetime('tanggal_bayar')->nullable();
            $table->enum('status', ['pending', 'booking', 'cancel']);
            $table->string('snap_token')->nullable(); //
            $table->timestamp('snap_token_created_at')->nullable();
            $table->timestamp('snap_token_expiry')->nullable();
            $table->string('payment_method')->nullable(); //
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_transactions');
    }
};
