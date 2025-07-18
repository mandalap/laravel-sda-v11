<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;
use App\Models\BookingTransaction;
use App\Models\WhatsappApiToken;

class WhatsAppClosingMemberTransaction implements ShouldQueue
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
        $booking = $this->booking;
        $message = BookingTransaction::where('id', $booking->id)->first();

        $namaMember = $message->member->nama;
        $telepon = $message->member->telepon;
        $sapaanMember = $message->member->sapaan;
        $kategori = $message->product->project->kategori->kategori;
        $kavling = $message->product->project->nama_project;
        $blok = $message->product->nama_product;
        $invoice = $message->invoice;
        // $biaya = number_format($message->jumlah_uang_booking);
        $route = route("riwayat.booking");
        $statusProduct = strtoupper($message->product->status);

        Carbon::setLocale('id');
        // $exp = Carbon::parse($message->snap_token_expiry)->setTimezone('Asia/Jakarta')->translatedFormat('l, d F Y H:i');

        $token = WhatsappApiToken::where('status', 'active')->first();

        $data = [
            'api_key' => $token->api_token,
            'sender' => $token->sender,
            'number' => $telepon,
            'message' => "Selamat *$sapaanMember $namaMember*\nPembelian $kategori *BERHASIL*.\n\n$kategori\nInvoice: *$invoice*\nProject: *$kavling*\nBlok: *$blok*\nStatus: *$statusProduct*\n\nSelanjutnya silahkan menunggu konfirmasi terkait *PJB (Perjanjian Jual Beli)* jika sudah dilegalisir oleh Notaris.\n\nUntuk info selanjutkan bisa tanyakan disini.\nSimpan nomor ini dengan nama *Admin Sajada Digital Agency*",
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
