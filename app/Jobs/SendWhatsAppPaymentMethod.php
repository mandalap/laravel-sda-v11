<?php

namespace App\Jobs;

use App\Models\BookingTransaction;
use App\Models\WhatsappApiToken;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;


class SendWhatsAppPaymentMethod implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $booking;
    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        $booking       = $this->booking;

        $dapat = BookingTransaction::where('id', $booking->id)->first();
        $nama = $dapat->member->nama;
        $telepon = $dapat->member->telepon;
        $sapaan = $dapat->member->sapaan;
        $invoice = $dapat->invoice;
        $kavling = $dapat->product->project->nama_project;
        $kategori = $dapat->product->project->kategori->kategori;
        $blok   = $dapat->product->nama_product;
        $biaya = number_format($dapat->jumlah_uang_booking);
        $route = route("riwayat.booking");
        Carbon::setLocale('id');
        $exp = Carbon::parse($dapat->snap_token_expiry)->setTimezone('Asia/Jakarta')->translatedFormat('l, d F Y H:i');
        $status = strtoupper($dapat->status);

        if ($dapat->payment_method == 'bank_transfer') {
            $payment = 'BANK TRANSFER';
        } elseif ($dapat->payment_method == 'qris') {
            $payment = 'QRIS';
        } else {
            $payment = strtoupper($dapat->payment_method); // fallback
        }

        // Token Whatsapp
        $token = WhatsappApiToken::where('status', 'active')->first();

        $data = [
            'api_key' => $token->api_token,
            'sender'  => $token->sender,
            'number'  => $telepon,
            'message' => "*Hai, $sapaan $nama!*\n\nSilahkan lakukan pembayaran untuk Booking *$kategori* yang sudah $sapaan $nama pilih ya\n\n*Invoice: $invoice*\n*Project: $kavling*\n*Blok: $blok*\n\n*Sebelum batas waktu : $exp WIB*\n\nSilahkan lakukan pembayaran agar pesanan $sapaan $nama bisa diproses.\n\n*Total Pembayaran: Rp $biaya*\n*Metode Pembayaran: $payment*\n*Status: $status*\n\nUntuk melanjukan pembayaran klik link dibawah ini :\n🔗 $route\n\nJika ada kendala atau pertanyaan, jangan ragu untuk hubungi kami ya.",
        ];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $token->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }
}
