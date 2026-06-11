<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Collection;

class InstallmentReminderNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(
        public Collection $installments,
        public ?string $customSubject  = null,
        public ?string $customBody  = null,
    ) {}

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $subject = $this->customSubject ?? 'Pengingat Cicilan - ' . config('app.name');

        return (new MailMessage)
            ->subject($subject)
            ->view('emails.installment-reminder', [
                'member'       => $notifiable,
                'installments' => $this->installments,
                'customBody'   => $this->customBody,
            ]);
    }
}
