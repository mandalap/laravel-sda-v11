<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhatsappApiToken extends Model
{
    //
    protected $fillable = ['sender', 'api_token', 'url', 'status'];
}
