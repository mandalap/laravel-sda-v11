<?php

namespace App\Jobs;

use App\Models\Member;
use App\Models\WhatsappApiToken;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SendWhatsAppDaftar implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $member;
    public function __construct($member)
    {
        $this->member = $member;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        $member       = $this->member;

        $dapat = Member::where('id', $member->id)->first();
        $nama = $dapat->nama;
        $telepon = $dapat->telepon;
        $sapaan = $dapat->sapaan;
        $random = $dapat->recovery_code;

        // Token Whatsapp
        $token = WhatsappApiToken::where('status', 'active')->first();

        $data = [
            'api_key' => $token->api_token,
            'sender'  => $token->sender,
            'number'  => $telepon,
            'message' => "*Selamat, $sapaan $nama!*\n\nAnda telah berhasil mendaftar di *Sajada Digital Agency* — Pusat Penjualan Tanah Kavling Secara Online yang *Aman, Terpercaya, dan Profesional.*\n\n Silakan login menggunakan: \n• Username = $telepon \n• Password sementara = $random\n\nSilahkan login melalui lini dibawah ini\n🔗 https://sajadadigital.com/\n\n*Segera ganti password Anda dan jaga kerahasiaannya demi keamanan akun.*\n\nSimpan nomor ini dengan nama Admin Sajada Digital Agency agar kami bisa terus membantu Anda dengan mudah.\n\nTemukan investasi terbaik Anda hanya di Sajada Digital Agency.",
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
