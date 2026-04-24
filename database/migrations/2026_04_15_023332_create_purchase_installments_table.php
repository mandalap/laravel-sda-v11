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
        Schema::create('purchase_installments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purchase_transaction_id')->constrained('purchase_transactions');

            $table->string('no_transaksi')->unique();
            $table->unsignedInteger('no_cicilan');
            $table->date('tanggal_cicilan');
            $table->decimal('harga_cicilan', 15, 2);

            $table->enum('metode_pembayaran', ['cash', 'transfer'])->nullable();
            $table->string('bukti_pembayaran')->nullable();
            $table->dateTime('tanggal_bayar')->nullable();

            $table->string('kwitansi')->nullable();
            $table->foreignId('verified_by')->nullable()->constrained('users');
            $table->dateTime('verified_at')->nullable();
            $table->text('catatan_admin')->nullable();

            $table->enum('status', [
                'unpaid',
                'pending',
                'paid',
                'rejected',
                'cancelled'
            ])->default('unpaid');

            $table->softDeletes();
            $table->timestamps();

            $table->index(['purchase_transaction_id', 'status']);
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_installments');
    }
};
