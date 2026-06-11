<?php

namespace App\Console\Commands;

use App\Models\InstallmentNotificationSetting;
use App\Models\PurchaseInstallment;
use App\Models\PurchaseTransaction;
use App\Notifications\InstallmentReminderNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendInstallmentReminders extends Command
{
    protected $signature = 'installments:send-reminders
                            {--force : Kirim meskipun notifikasi nonaktif atau bukan tanggal/jam pengiriman}
                            {--dry-run : Simulasi pengiriman tanpa benar-benar mengirim email}';

    protected $description = 'Kirim email pengingat cicilan ke member';

    public function handle(): int
    {
        $settings = InstallmentNotificationSetting::getCurrent();

        if (! $settings->shouldDispatchNow() && ! $this->option('force')) {
            return self::SUCCESS;
        }

        $installments = PurchaseInstallment::query()
            ->whereIn('status', [
                PurchaseInstallment::STATUS_UNPAID,
                PurchaseInstallment::STATUS_REJECTED,
            ])
            ->where('tanggal_cicilan', '<=', now()->toDateString())
            ->whereHas(
                'purchaseTransaction',
                fn($q) =>
                $q->where('status', PurchaseTransaction::STATUS_ACTIVE)
            )
            ->with('purchaseTransaction.member')
            ->orderBy('tanggal_cicilan')
            ->get();

        if ($installments->isEmpty()) {
            Log::info('[InstallmentReminder] Tidak ada cicilan yang perlu diingatkan.');
            $this->info('Tidak ada cicilan yang perlu diingatkan.');
            return self::SUCCESS;
        }

        $grouped = $installments->groupBy(
            fn($installment) => $installment->purchaseTransaction->member_id
        );

        $successCount = 0;
        $skipCount    = 0;
        $failCount    = 0;

        foreach ($grouped as $memberId => $memberInstallments) {
            $member = $memberInstallments->first()->purchaseTransaction->member;

            if (! $member || ! filter_var($member->email, FILTER_VALIDATE_EMAIL)) {
                Log::warning("[InstallmentReminder] Member {$memberId} tidak memiliki email valid.", [
                    'email' => $member->email ?? null,
                ]);
                $skipCount++;
                continue;
            }

            if ($this->option('dry-run')) {
                $this->line("  [dry-run] → {$member->name} <{$member->email}> ({$memberInstallments->count()} cicilan)");
                $successCount++;
                continue;
            }

            try {
                $member->notify(new InstallmentReminderNotification(
                    installments: $memberInstallments,
                    customSubject: $settings->email_subject,
                    customBody: $settings->email_body,
                ));

                $successCount++;
            } catch (\Exception $e) {
                Log::error("[InstallmentReminder] Gagal mengirim ke member {$memberId}: {$e->getMessage()}");
                $failCount++;
            }
        }

        Log::info('[InstallmentReminder] Selesai.', [
            'success' => $successCount,
            'skipped' => $skipCount,
            'failed'  => $failCount,
            'total_installments' => $installments->count(),
        ]);

        $prefix = $this->option('dry-run') ? '[dry-run] ' : '';
        $this->info("{$prefix}Berhasil: {$successCount} member | Dilewati: {$skipCount} | Gagal: {$failCount}");

        return self::SUCCESS;
    }
}
