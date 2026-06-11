<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstallmentNotificationSetting extends Model
{
    protected $fillable = [
        'is_enabled',
        'notification_dates',
        'notification_time',
        'email_subject',
        'email_body',
    ];

    protected $casts = [
        'is_enabled' => 'boolean',
        'notification_dates' => 'array',
    ];

    // Helpers
    public static function getCurrent(): static
    {
        return static::firstOrCreate(
            [],
            [
                'is_enabled'         => false,
                'notification_dates' => [1],
                'notification_time'  => '20:00',
            ]
        );
    }

    // accessors
    public function isEnabled(): bool
    {
        return $this->is_enabled === true;
    }

    public function getNotificationDates(): array
    {
        return $this->notification_dates ?? [1];
    }

    public function getNotificationTime(): string
    {
        return $this->notification_time ?? '20:00';
    }

    public function shouldSendToday(): bool
    {
        $today = now()->day;
        return in_array($today, $this->getNotificationDates(), strict: true);
    }

    public function shouldSendAtThisTime(): bool
    {
        [$scheduledHour, $scheduledMinute] = array_map(
            'intval',
            explode(':', $this->getNotificationTime())
        );

        $now = now();

        // Jam harus sama
        if ($now->hour !== $scheduledHour) {
            return false;
        }

        // Menit dalam window 0 sampai +5 (grace period)
        $minuteDiff = $now->minute - $scheduledMinute;

        return $minuteDiff >= 0 && $minuteDiff <= 5;
    }

    public function shouldDispatchNow(): bool
    {
        return $this->isEnabled()
            && $this->shouldSendToday()
            && $this->shouldSendAtThisTime();
    }
}
