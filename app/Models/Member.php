<?php
// app/Models/Member.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Filament\Models\Contracts\HasAvatar;
use Filament\Models\Contracts\HasName;
use Illuminate\Notifications\Notifiable;

class Member extends Authenticatable implements LaratrustUser, FilamentUser, HasName, HasAvatar
{
    use HasRolesAndPermissions;
    use SoftDeletes;
    use Notifiable;

    protected $table = "members";

    protected $guard = 'member';

    protected $fillable = [
        'sapaan',
        'nama',
        'email',
        'telepon',
        'password',
        'recovery_code',
        'status',
        'gender',
        'tempat_lahir',
        'tanggal_lahir',
        'kota_id',
        'alamat',
        'thumbnail',
    ];

    protected $hidden = [
        'password',
        'recovery_code',
    ];

    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function bookingTransactions()
    {
        return $this->hasMany(BookingTransaction::class);
    }

    public function agency()
    {
        return $this->hasOne(Agency::class);
    }

    public function developer()
    {
        return $this->hasOne(Developer::class);
    }

    /**
     * Check apakah member adalah developer yang approved
     */
    public function isDeveloper(): bool
    {
        return $this->developer()
            ->where('status', 'approved')
            ->exists();
    }

    /**
     * Get developer data
     */
    public function getDeveloperData(): ?Developer
    {
        return $this->developer;
    }

    /**
     * Akses ke Panel Filament
     * HANYA developer approved yang bisa akses panel developer
     */
    public function canAccessPanel(Panel $panel): bool
    {
        // Panel Developer - hanya untuk developer yang approved
        if ($panel->getId() === 'developer') {
            return $this->isDeveloper();
        }

        // Member tidak bisa akses panel lain (admin)
        return false;
    }

    /**
     * Get nama untuk Filament
     */
    public function getFilamentName(): string
    {
        return $this->developer?->nama ?? $this->nama ?? $this->email;
    }

    /**
     * Get avatar untuk Filament
     */
    public function getFilamentAvatarUrl(): ?string
    {
        if ($this->thumbnail) {
            return asset('storage/' . $this->thumbnail);
        }

        if ($this->developer?->thumbnail) {
            return asset('storage/' . $this->developer->thumbnail);
        }

        return null;
    }
}
