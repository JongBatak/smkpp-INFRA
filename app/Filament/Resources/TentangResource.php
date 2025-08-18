<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TentangResource\Pages;
use App\Filament\Resources\TentangResource\RelationManagers;
use App\Models\Tentang;
use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TentangResource extends Resource
{
    protected static ?string $model = Tentang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'TENTANG';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('visi')
                    ->label('Visi Sekolah')
                    ->required()
                    ->extraInputAttributes(['spellcheck' => 'false'])
                    ->columnSpanFull(),

                Forms\Components\RichEditor::make('misi')
                    ->label('Misi Sekolah')
                    ->required()
                    ->extraInputAttributes(['spellcheck' => 'false'])
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('cover')
                    ->label('Cover')
                    ->image()
                    ->directory('images')
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('visi')->label('Visi Sekolah'),
                TextColumn::make('misi')->label('Misi Sekolah'),
                ImageColumn::make('cover')->label('Cover')->disk('public')
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
            'index' => Pages\ListTentangs::route('/'),
            'create' => Pages\CreateTentang::route('/create'),
            'edit' => Pages\EditTentang::route('/{record}/edit'),
        ];
    }
}
