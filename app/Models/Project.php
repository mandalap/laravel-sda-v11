<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Project extends Model
{
    //
    use SoftDeletes;
    protected $table = "projects";

    protected $fillable = [
        'developer_id',
        'lokasi_id',
        'kategori_id',
        'jenis_id',
        'nama_project',
        'slug',
        'alamat_project',
        'url_video',
        'google_map',
        'latlang',
        'deskripsi',
        'sertifikat',
        'status_sertifikat',
        'transaksi',
        'status',
        'kelompok_id',
        'is_approved',
        'thumbnail',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['nama_project'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function developer(): BelongsTo
    {
        return $this->belongsTo(Developer::class);
    }


    public function lokasi(): BelongsTo
    {
        return $this->belongsTo(Lokasi::class);
    }

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    public function jenis(): BelongsTo
    {
        return $this->belongsTo(Jenis::class);
    }
    public function kelompok(): BelongsTo
    {
        return $this->belongsTo(Kelompok::class);
    }

    protected static function booted()
    {
        static::creating(function ($project) {
            $project->slug = Str::slug($project->nama_project);
        });

        static::updating(function ($project) {
            if ($project->isDirty('nama_project')) { // Hanya update jika kategori berubah
                $project->slug = Str::slug($project->nama_project);
            }
        });
    }

    public function getPricingInfo()
    {
        $products = $this->project_product;

        if ($products->isEmpty()) {
            return [
                'has_multiple_prices' => false,
                'has_discount' => false,
                'min_price' => 0,
                'max_price' => 0,
                'min_original_price' => 0,
                'max_original_price' => 0,
                'min_discounted_price' => 0,
                'max_discounted_price' => 0
            ];
        }

        // Ambil harga minimum dan maksimum dari harga asli
        $minPrice = $products->min('harga');
        $maxPrice = $products->max('harga');

        // Cek apakah ada discount yang tidak null
        $hasDiscount = $products->whereNotNull('discount')->where('discount', '>', 0)->count() > 0;

        // Hitung harga setelah diskon untuk semua produk
        $discountedPrices = [];
        foreach ($products as $product) {
            $discount = $product->discount ?? 0;
            $discountedPrice = $product->harga - $discount;
            $discountedPrices[] = $discountedPrice;
        }

        // Ambil minimum dan maksimum dari harga yang sudah didiskon
        $minDiscountedPrice = min($discountedPrices);
        $maxDiscountedPrice = max($discountedPrices);

        // Untuk menentukan harga asli yang sesuai dengan harga diskon min/max
        $minOriginalPrice = $minPrice;
        $maxOriginalPrice = $maxPrice;

        if ($hasDiscount) {
            // Cari produk yang memiliki harga diskon minimum
            foreach ($products as $product) {
                $discount = $product->discount ?? 0;
                $discountedPrice = $product->harga - $discount;

                if ($discountedPrice == $minDiscountedPrice) {
                    $minOriginalPrice = $product->harga;
                }

                if ($discountedPrice == $maxDiscountedPrice) {
                    $maxOriginalPrice = $product->harga;
                }
            }
        }

        // Tentukan apakah memiliki multiple prices berdasarkan harga ASLI
        $hasMultiplePrices = ($minPrice != $maxPrice);

        return [
            'has_multiple_prices' => $hasMultiplePrices,
            'has_discount' => $hasDiscount,
            'min_price' => $minPrice,
            'max_price' => $maxPrice,
            'min_original_price' => $minOriginalPrice,
            'max_original_price' => $maxOriginalPrice,
            'min_discounted_price' => $minDiscountedPrice,
            'max_discounted_price' => $maxDiscountedPrice
        ];
    }
    /**
     * Format harga untuk display
     * @param int $price
     * @param bool $withRp
     * @return string
     */
    public function formatShortPrice($price, $withRp = true)
    {
        if ($price >= 1000000000) {
            $formatted = number_format($price / 1000000000, 0, ',', '.') . ' Miliar';
        } elseif ($price >= 1000000) {
            $formatted = number_format($price / 1000000, 0, ',', '.') . ' Juta';
        } elseif ($price >= 1000) {
            $formatted = number_format($price / 1000, 0, ',', '.') . ' Ribu';
        } else {
            $formatted = number_format($price, 0, ',', '.');
        }

        return $withRp ? 'Rp ' . $formatted : $formatted;
    }

    /**
     * Get formatted price display
     * @return string
     */
    public function getPriceDisplay()
    {
        $pricing = $this->getPricingInfo();

        if (!$pricing['has_multiple_prices'] && !$pricing['has_discount']) {
            // Hanya 1 harga, tanpa diskon
            return '<span class="text-sm font-semibold text-primary">' .
                $this->formatShortPrice($pricing['min_price']) .
                '</span>';
        }

        if (!$pricing['has_multiple_prices'] && $pricing['has_discount']) {
            // Hanya 1 harga, ada diskon - tampilkan harga diskon + coretan harga asli
            return '<span class="inline-flex items-baseline gap-1 md:gap-2">' .
                '<span class="text-sm font-semibold text-primary">' .
                $this->formatShortPrice($pricing['min_discounted_price']) .
                '</span>' .
                '<span class="text-[10px] text-custom-gray-80 line-through relative" style="top: -4px;">' .
                $this->formatShortPrice($pricing['min_original_price']) .
                '</span>' .
                '</span>';
        }

        if ($pricing['has_multiple_prices'] && !$pricing['has_discount']) {
            // Multiple harga, tanpa diskon
            return '<span class="text-sm font-semibold text-primary">' .
                $this->formatShortPrice($pricing['min_price']) . ' - ' .
                $this->formatShortPrice($pricing['max_price']) .
                '</span>';
        }

        if ($pricing['has_multiple_prices'] && $pricing['has_discount']) {
            // Multiple harga, ada diskon - tampilkan rentang harga setelah diskon
            return '<span class="text-sm font-semibold text-primary">' .
                $this->formatShortPrice($pricing['min_discounted_price']) . ' - ' .
                $this->formatShortPrice($pricing['max_discounted_price']) .
                '</span>';
        }
    }

    public function projectPhotos()
    {
        return $this->hasMany(ProjectPhoto::class);
    }

    public function projectFasilitas()
    {
        return $this->hasMany(ProjectFasilitas::class);
    }

    public function projectKeterangan()
    {
        return $this->hasMany(ProjectKeterangan::class);
    }
    public function project_product()
    {
        return $this->hasMany(Product::class);
    }

    public function projectsBrosur()
    {
        return $this->hasMany(ProjectBrosur::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
