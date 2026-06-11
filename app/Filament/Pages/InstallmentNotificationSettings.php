<?php

namespace App\Filament\Pages;

use App\Models\InstallmentNotificationSetting;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class InstallmentNotificationSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon  = 'heroicon-o-bell-alert';
    protected static ?string $navigationLabel = 'Notifikasi Cicilan';
    protected static ?string $title           = 'Notifikasi Cicilan';
    protected static ?string $navigationGroup = 'Transaksi';
    protected static ?int    $navigationSort  = 99;
    protected static string  $view            = 'filament.pages.installment-notification-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $settings = InstallmentNotificationSetting::getCurrent();

        $this->form->fill([
            'is_enabled'         => $settings->is_enabled,
            'notification_dates' => array_map('strval', $settings->getNotificationDates()),
            'notification_time'  => $settings->getNotificationTime(),
            'email_subject'      => $settings->email_subject,
            'email_body'         => $settings->email_body,
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Status Notifikasi')
                    ->schema([
                        Toggle::make('is_enabled')
                            ->label('Aktifkan Notifikasi Cicilan')
                            ->helperText('Jika dimatikan, tidak ada email pengingat yang akan dikirim.')
                            ->live()
                            ->columnSpanFull(),
                    ]),

                Section::make('Jadwal Pengiriman')
                    ->description('Tentukan kapan email pengingat dikirim setiap bulannya.')
                    ->schema([

                        TagsInput::make('notification_dates')
                            ->label('Tanggal Pengiriman')
                            ->helperText('Ketik angka (1–28) lalu tekan Enter. Maksimal 2 tanggal per bulan.')
                            ->placeholder('Contoh: 1, 15')
                            ->prefix('Tanggal')
                            ->rules(
                                fn(Get $get) => $get('is_enabled')
                                    ? [
                                        'required',
                                        'array',
                                        'min:1',
                                        'max:2',
                                        function (string $attribute, mixed $value, \Closure $fail) {
                                            foreach ($value as $date) {
                                                $int = (int) $date;
                                                if ($int < 1 || $int > 28) {
                                                    $fail("Tanggal \"{$date}\" tidak valid. Masukkan angka antara 1 sampai 28.");
                                                }
                                            }
                                        },
                                    ]
                                    : []
                            )
                            ->validationMessages([
                                'min' => 'Masukkan minimal 1 tanggal pengiriman.',
                                'max' => 'Maksimal 2 tanggal pengiriman per bulan.',
                            ])
                            ->disabled(fn(Get $get): bool => ! $get('is_enabled'))
                            ->dehydrated(true),

                        TimePicker::make('notification_time')
                            ->label('Jam Pengiriman')
                            ->helperText('Email akan dikirim pada jam ini (toleransi ±5 menit).')
                            ->seconds(false)
                            ->required(),

                    ])
                    ->visible(fn(Get $get): bool => $get('is_enabled')),

                Section::make('Kustomisasi Email')
                    ->description('Opsional. Kosongkan untuk menggunakan template default.')
                    ->schema([

                        TextInput::make('email_subject')
                            ->label('Subject Email')
                            ->placeholder('Pengingat Cicilan — ' . config('app.name'))
                            ->maxLength(255)
                            ->nullable(),

                        Textarea::make('email_body')
                            ->label('Pesan Tambahan')
                            ->helperText('Ditampilkan di atas daftar cicilan pada email.')
                            ->placeholder('Yth. Member, berikut daftar cicilan Anda yang akan segera jatuh tempo...')
                            ->rows(4)
                            ->maxLength(1000)
                            ->nullable(),

                    ])
                    ->visible(fn(Get $get): bool => $get('is_enabled')),

            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $validated = $this->form->getState();

        $settings = InstallmentNotificationSetting::getCurrent();

        $isEnabled = (bool) ($validated['is_enabled'] ?? false);

        if ($isEnabled) {
            $settings->update([
                'is_enabled'         => $validated['is_enabled'] ?? false,
                'notification_dates' => array_map('intval', $validated['notification_dates'] ?? [1]),
                'notification_time'  => $validated['notification_time'] ?? '20:00',
                'email_subject'      => $validated['email_subject'] ?? null,
                'email_body'         => $validated['email_body'] ?? null,
            ]);
        } else {
            $settings->update([
                'is_enabled'         => false,
            ]);
        }


        Notification::make()
            ->title('Pengaturan berhasil disimpan')
            ->success()
            ->send();
    }
}
