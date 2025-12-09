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

class WhatsAppBookingDeveloperTransaction implements ShouldQueue
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

        $namaDeveloper = $message->product->project->developer->nama;
        $teleponDeveloper = $message->product->project->developer->telepon;
        $kategori = $message->product->project->kategori->kategori;
        $kavling = $message->product->project->nama_project;
        $blok = $message->product->nama_product;
        $route = route("detailproject", [
            'jenis' => $message->product->project->jenis->jenis,
            'kategori' => $message->product->project->kategori->kategori,
            'project' => $message->product->project->slug,
        ]);


        Carbon::setLocale('id');

        $token = WhatsappApiToken::where('status', 'active')->first();

        $data = [
            'api_key' => $token->api_token,
            'sender' => $token->sender,
            'number' => $teleponDeveloper,
            'message' => "Halo $namaDeveloper,\nKami dari Sajada Digital Agency ingin menyampaikan bahwa terdapat pemberitahuan booking dari konsumen.\n\nKategori: *$kategori*\nProject: $kavling - $blok\nLink Produk: $route\n\nMohon konfirmasi apakah produk/rumah tersebut masih *tersedia* atau sudah *terjual*. Informasi ketersediaan diperlukan untuk menindaklanjuti calon pembeli.\n\nTerima Kasih.\n-Sajada Digital Agency",
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
