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


class SendWhatsAppPaymentSuccess implements ShouldQueue
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
        $kategori = $dapat->product->project->kategori->kategori;
        $kavling = $dapat->product->project->nama_project;
        $blok   = $dapat->product->nama_product;
        $biaya = number_format($dapat->jumlah_uang_booking);
        $route = route("riwayat.booking");
        $status = strtoupper($dapat->status);
        $tgl_bayar = Carbon::parse($dapat->tanggal_bayar)->setTimezone('Asia/Jakarta')->translatedFormat('l, d F Y H:i');


        if ($dapat->payment_method == 'bank_transfer') {
            $payment = 'BANK TRANSFER';
        } elseif ($dapat->payment_method == 'qris') {
            $payment = 'QRIS';
        } else {
            $payment = strtoupper($dapat->payment_method);
        }

        // Token Whatsapp
        $token = WhatsappApiToken::where('status', 'active')->first();

        $data = [
            'api_key' => $token->api_token,
            'sender'  => $token->sender,
            'number'  => $telepon,
            'message' => "*Hai, $sapaan $nama!*\n\nTransaksi Booking *$kategori* $sapaan $nama sudah dikonfirmasi ya.\n\n*Invoice: $invoice*\n*Project: $kavling*\n*Blok: $blok*\n*Metode Pembayaran: $payment*\n*Biaya Booking: Rp $biaya*\n*Status: $status (BERHASIL)*\n*Tanggal Pembayaran: $tgl_bayar WIB*\n\nUntuk melihat detail transaksinya klik link dibawah ini :\n🔗 $route\n\nJika ada kendala atau pertanyaan, jangan ragu untuk hubungi kami ya.",
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
