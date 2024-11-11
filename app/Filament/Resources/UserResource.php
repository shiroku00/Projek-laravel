<?php

namespace App\Filament\Resources;

use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms;
use Filament\Tables\Table;
use Filament\Forms\Form;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;

class UserResource extends Resource
{
    protected static ?string $model = null;  // Tidak menggunakan model karena tidak ada database
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Pelanggan';
    protected static ?string $navigationGroup = 'Manajemen Pengguna';

    public static function form(Form $form): Form
    {
        return $form->schema([
            // Kolom form (bisa ditambahkan jika perlu)
        ]);
    }

    public static function table(Table $table): Table
    {
        // Data dummy
        $dummyData = [
            (object) ['name' => 'John Doe', 'email' => 'john@example.com', 'role' => 'admin', 'status' => 'active', 'profile_photo_url' => 'https://via.placeholder.com/150'],
            (object) ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'role' => 'user', 'status' => 'inactive', 'profile_photo_url' => 'https://via.placeholder.com/150'],
            (object) ['name' => 'Alice Johnson', 'email' => 'alice@example.com', 'role' => 'user', 'status' => 'active', 'profile_photo_url' => 'https://via.placeholder.com/150'],
        ];

        return $table
            ->columns([
                ImageColumn::make('profile_photo_url')  // Kolom foto profil
                    ->label('Profile')
                    ->rounded()
                    ->defaultImageUrl('https://via.placeholder.com/150'),  // Jika tidak ada foto profil
                TextColumn::make('name')  // Kolom nama
                    ->label('Name')
                    ->searchable(),  // Aktifkan pencarian untuk kolom ini
                TextColumn::make('email')  // Kolom email
                    ->label('Email')
                    ->searchable(),  // Aktifkan pencarian untuk kolom ini
                BadgeColumn::make('role')  // Kolom peran pengguna
                    ->label('Role')
                    ->colors([
                        'primary' => 'admin',   // Warna untuk admin
                        'secondary' => 'user',  // Warna untuk user
                    ]),
                BadgeColumn::make('status')  // Kolom status
                    ->label('Status')
                    ->colors([
                        'success' => 'active',   // Warna untuk status aktif
                        'danger' => 'inactive',  // Warna untuk status tidak aktif
                    ]),
            ])
            ->query(function ($query) use ($dummyData) {
                // Menggunakan koleksi Laravel
                return collect($dummyData);  // Menggunakan koleksi Laravel untuk data dummy
            })
            ->defaultSort('name');  // Urutkan berdasarkan nama secara default
    }

    public static function getPages(): array
    {
        return [
            'index' => UserResource\Pages\ListUsers::route('/'),
            'create' => UserResource\Pages\CreateUser::route('/create'),
            'edit' => UserResource\Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
