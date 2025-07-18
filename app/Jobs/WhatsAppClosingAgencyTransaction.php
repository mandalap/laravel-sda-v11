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

class WhatsAppClosingAgencyTransaction implements ShouldQueue
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

        // Ambil data konsumen
        $namaAgency = $message->agency->nama;
        $namaMember = $message->member->nama;
        $telepon = $message->agency->telepon;
        $sapaanAgency = $message->agency->sapaan;
        $sapaanMember = $message->member->sapaan;
        $kategori = $message->product->project->kategori->kategori;
        $kavling = $message->product->project->nama_project;
        $blok = $message->product->nama_product;
        $invoice = $message->invoice;
        $metodePembayaran = strtoupper($message->payment_method);
        $route = route("riwayat.booking");
        $statusProduct = strtoupper($message->product->status);
        $no_rekening = $message->agency->nomor_rekening ?? '- (Mohon untuk mengisi data rekening di profil agency)';
        $bank = $message->agency->nama_bank ?? '- (Mohon untuk mengisi data rekening di profil agency)';

        $token = WhatsappApiToken::where('status', 'active')->first();

        $data = [
            'api_key' => $token->api_token,
            'sender' => $token->sender,
            'number' => $telepon,
            'message' => "Terima Kasih *$sapaanAgency $namaAgency*\nPembelian $kategori Konsumen kamu yang bernama *$sapaanMember $namaMember Berhasil* .\n\n*$kategori*\nInvoice: *$invoice*\nProject: *$kavling*\nBlok: *$blok*\nStatus: *$statusProduct*\n\nUntuk informasi selanjutnya terkait pencairan Fee akan diinformasikan kembali.\n\nSilahkan periksa kembali terkait Nomor Rekening tujuan pencairan fee.\nNomor Rekening: *$no_rekening*\nNama Bank: *$bank*\n\n*Terima Kasih*",
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
