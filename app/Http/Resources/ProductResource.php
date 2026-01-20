<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'code_product' => $this->code_product,
            'nama_product' => $this->nama_product,
            'panjang' => $this->panjang,
            'lebar' => $this->lebar,
            'luas' => $this->luas,
        ];
    }
}
