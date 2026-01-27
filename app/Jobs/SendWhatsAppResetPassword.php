<?php

namespace App\Jobs;

use App\Models\Member;
use App\Models\WhatsappApiToken;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendWhatsAppResetPassword implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $memberId;

    public function __construct($member)
    {
        $this->memberId = $member->id;
    }

    public function handle(): void
    {
        $member = Member::find($this->memberId);

        if (!$member) {
            return;
        }

        $nama = $member->nama;
        $telepon = $member->telepon;
        $sapaan = $member->sapaan;
        $random = $member->recovery_code;
        $route = route('login');

        if (empty($random)) {
            return;
        }

        // Token Whatsapp
        $token = WhatsappApiToken::where('status', 'active')->first();

        if (!$token) {
            return;
        }

        $data = [
            'api_key' => $token->api_token,
            'sender'  => $token->sender,
            'number'  => $telepon,
            'message' => "*Hai $sapaan $nama,*\n\nSelamat! Password Anda sudah berhasil diubah.\n\nPassword terbaru: $random\n\nSilahkan login melalui link dibawah ini\n🔗 $route\n\n*Segera ganti password Anda dan jaga kerahasiaannya demi keamanan akun.*\n\nJika butuh bantuan, kami siap membantu Anda kapan saja!",
        ];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $token->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
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
    }
}
