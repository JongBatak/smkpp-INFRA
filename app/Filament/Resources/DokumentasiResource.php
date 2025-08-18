<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokumentasiResource\Pages;
use App\Filament\Resources\DokumentasiResource\RelationManagers;
use App\Models\Dokumentasi;
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

class DokumentasiResource extends Resource
{
    protected static ?string $model = Dokumentasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'DOKUMENTASI';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            TextInput::make('title')
                ->label('Judul Video')
                ->maxLength('155')
                ->required()
                ->placeholder('e.g. Dokumentasi Sekolah Prestasi Prima')
                ->columnSpanFull()
                ->extraInputAttributes(['spellcheck' => 'false']),
            TextInput::make('id_video')
                ->label('ID Url Video (YouTube)')
                ->maxLength('155')
                ->required()
                ->placeholder('e.g. 1Xh2O8XVwTs')
                ->columnSpanFull()
                ->extraInputAttributes(['spellcheck' => 'false']),    
            TextInput::make('link_video')
                ->label('Link URL Video (YouTube)')
                ->required()
                ->placeholder('e.g. https://www.youtube.com/watch?v=1Xh2O8XVwTs')
                ->columnSpanFull()
                ->extraInputAttributes(['spellcheck' => 'false']),
            FileUpload::make('thumbnail')
                ->label('Thumbnail Video')
                ->image()
                ->directory('images/thumbnail')
                ->required()
                ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')->label('Thumbnail Video')->disk('public'),
                TextColumn::make('title')->label('Judul Video')->searchable()->sortable(),
                TextColumn::make('link_video')->label('Link Video')->url(fn ($record) => $record->link_video),
                TextColumn::make('id_video')->label('ID Video')->searchable()->sortable(),
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
            'index' => Pages\ListDokumentasis::route('/'),
            'create' => Pages\CreateDokumentasi::route('/create'),
            'edit' => Pages\EditDokumentasi::route('/{record}/edit'),
        ];
    }
}
