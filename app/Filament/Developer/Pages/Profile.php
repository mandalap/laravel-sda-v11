<?php

namespace App\Filament\Developer\Pages;

use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Profile extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    protected static string $view = 'filament.developer.pages.profile';

    protected static ?string $navigationLabel = 'Profil';

    protected static ?string $title = 'Profil ';

    public ?array $data = [];

    public function mount(): void
    {
        $developer = auth('member')->user()->developer;

        $this->form->fill([
            'nama' => $developer->nama,
            'email' => $developer->email,
            'telepon' => $developer->telepon,
            'alamat' => $developer->alamat,
            'thumbnail' => $developer->thumbnail,
        ]);
    }


    public function form(Form $form): Form
    {
        $developer = auth('member')->user()->developer;

        return $form
            ->schema([
                Section::make('Informasi Developer')
                    ->description('Kelola informasi profil developer Anda')
                    ->schema([
                        FileUpload::make('thumbnail')
                            ->label('Foto/Logo Developer')
                            ->image()
                            ->directory('developers')
                            ->maxSize(2048)
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '1:1',
                            ])
                            ->helperText('Format: JPG, PNG, JPEG. Maksimal 2MB')
                            ->columnSpanFull(),

                        TextInput::make('nama')
                            ->label('Nama Developer/Perusahaan')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: Riil Properti'),

                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->maxLength(255)
                            ->placeholder('developer@example.com'),

                        TextInput::make('telepon')
                            ->label('Nomor WhatsApp')
                            ->tel()
                            ->required()
                            ->maxLength(15)
                            ->placeholder('081234567890')
                            ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/'),

                        Textarea::make('alamat')
                            ->label('Alamat')
                            ->required()
                            ->maxLength(500)
                            ->rows(4)
                            ->placeholder('Masukkan alamat lengkap developer')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ])
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Simpan Perubahan')
                ->submit('save')
                ->icon('heroicon-o-check'),
        ];
    }

    public function save(): void
    {
        try {
            $data = $this->form->getState();
            $developer = auth('member')->user()->developer;

            // Jika ada thumbnail baru dan ada thumbnail lama, hapus yang lama
            if (isset($data['thumbnail']) && $data['thumbnail'] !== $developer->thumbnail) {
                if ($developer->thumbnail && Storage::disk('public')->exists($developer->thumbnail)) {
                    Storage::disk('public')->delete($developer->thumbnail);
                }
            }

            // Update developer
            $developer->update([
                'nama' => $data['nama'],
                'email' => $data['email'],
                'telepon' => $data['telepon'],
                'alamat' => $data['alamat'],
                'slug' => Str::slug($data['nama']),
                'thumbnail' => $data['thumbnail'] ?? $developer->thumbnail,
            ]);

            Notification::make()
                ->title('Profil berhasil diperbarui')
                ->success()
                ->send();
        } catch (\Exception $e) {
            Notification::make()
                ->title('Terjadi kesalahan')
                ->body($e->getMessage())
                ->danger()
                ->send();

            Log::error('Profile Update Error: ' . $e->getMessage());
        }
    }
}
