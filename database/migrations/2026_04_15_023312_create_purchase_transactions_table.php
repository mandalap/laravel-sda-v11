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
        Schema::create('purchase_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_transaction_id')->constrained('booking_transactions');
            $table->foreignId('member_id')->constrained('members');
            $table->foreignId('product_id')->constrained('products');
            $table->foreignId('agency_id')->nullable()->constrained('agency');

            $table->string('invoice')->unique();
            $table->date('tanggal_pembelian');
            $table->decimal('harga_tanah', 15, 2);
            $table->decimal('diskon', 15, 2)->nullable();
            $table->decimal('total_harga', 15, 2);
            $table->decimal('harga_booking', 15, 2);
            $table->decimal('jumlah_dp', 15, 2)->default(0);

            $table->enum('metode_pembayaran', ['cash', 'kredit', 'cash_tempo']);
            $table->integer('jumlah_bulan_cicilan')->nullable();
            $table->decimal('harga_cicilan_perbulan', 15, 2)->nullable();

            $table->string('pjb')->nullable();
            $table->date('tanggal_lunas')->nullable();
            $table->enum('status', ['active', 'paid', 'cancelled'])->default('active');

            $table->text('catatan')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_transactions');
    }
};
