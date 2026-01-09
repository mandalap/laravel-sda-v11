<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'invoice' => $this->invoice,
            'jumlah_uang_booking' => $this->jumlah_uang_booking,
            'harga_tanah' => $this->harga_tanah,
            'diskon' => $this->diskon,
            'total_harga' => $this->total_harga,
            'member' => new MemberResource($this->whenLoaded('member')),
            'product' => new ProductResource($this->whenLoaded('product')),
        ];
    }
}
