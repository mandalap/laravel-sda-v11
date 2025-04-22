<?php

namespace App\Jobs;

use App\Models\Member;
use App\Models\WhatsappApiToken;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendWhatsAppSuccessChange implements ShouldQueue
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

        // Token Whatsapp
        $token = WhatsappApiToken::where('status', 'active')->first();

        $data = [
            'api_key' => $token->api_token,
            'sender'  => $token->sender,
            'number'  => $telepon,
            'message' => "*Hai $sapaan $nama,*\n\nAnda baru saja berhasil mengubah password.\n\nJika butuh bantuan, kami siap membantu Anda kapan saja!",
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
