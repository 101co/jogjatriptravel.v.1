<?php

namespace App\Filament\Resources\Master;

use App\Filament\Resources\Master\DestinationResource\Pages;
use App\Filament\Resources\Master\DestinationResource\RelationManagers;
use App\Models\Master\Destination;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DestinationResource extends Resource
{
    protected static ?string $model = Destination::class;

    protected static ?string $navigationGroup = 'Master';
    protected static ?string $navigationLabel = 'Destinasi Wisata';
    protected static ?string $slug = 'destinasi-wisata';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 7;

    public static function canViewAny(): bool
    {
        return authUserMenu('JTTAM007', auth()->user()->id);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Destinasi Wisata')
                    ->maxLength(100),
                FileUpload::make('images')
                    ->label('Foto Destinasi')
                    ->minFiles(1)
                    ->maxFiles(3)
                    ->panelLayout('grid')
                    ->multiple(),
                Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Destinasi Wisata')
                    ->searchable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageDestinations::route('/'),
        ];
    }
}
