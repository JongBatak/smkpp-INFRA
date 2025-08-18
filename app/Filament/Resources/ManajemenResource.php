<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ManajemenResource\Pages;
use App\Filament\Resources\ManajemenResource\RelationManagers;
use App\Models\Manajemen;
use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ManajemenResource extends Resource
{
    protected static ?string $model = Manajemen::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'MANAJEMEN';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama Guru')
                    ->maxLength('155')
                    ->required()
                    ->placeholder('e.g. Hendry Kurniawan, S.Kom., M.I.Kom.')
                    ->extraInputAttributes(['spellcheck' => 'false']),
                TextInput::make('role')
                    ->label('Jabatan Guru')
                    ->maxLength('155')
                    ->required()
                    ->placeholder('e.g. Kepala Sekolah SMK')
                    ->extraInputAttributes(['spellcheck' => 'false']),
                FileUpload::make('profile')
                    ->label('Foto Profil')
                    ->image()
                    ->directory('images/guru')
                    ->required()
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('profile')->label('Foto Profil')->disk('public'),
                TextColumn::make('name')->label('Nama Guru')->searchable()->sortable(),
                TextColumn::make('role')->label('Jabatan Guru')->searchable()->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListManajemens::route('/'),
            'create' => Pages\CreateManajemen::route('/create'),
            'edit' => Pages\EditManajemen::route('/{record}/edit'),
        ];
    }
}
