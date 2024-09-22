<?php

namespace App\Filament\Resources\Transaction;

use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Master\Contact;
use App\Models\Master\Facility;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\Layout\Stack;
use App\Models\Transaction\TravelCatalogue;
use Filament\Forms\Components\CheckboxList;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\Transaction\TravelCatalogueResource\Pages;
use App\Models\Master\Destination;

class TravelCatalogueResource extends Resource
{
    protected static ?string $model = TravelCatalogue::class;

    protected static ?string $navigationGroup = 'Transaction';
    protected static ?string $navigationLabel = 'Travel Catalogue';
    protected static ?string $slug = 'travel-catalogue';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 1;

    public static function canViewAny(): bool
    {
        return authUserMenu('JTTAT001', auth()->user()->id);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(100),
                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->maxLength(100),
                TextInput::make('sub_title')
                    ->label('Sub Judul')
                    ->maxLength(100),
                FileUpload::make('cover_images')
                    ->multiple()
                    ->minFiles(1)
                    ->maxFiles(5)
                    ->reorderable()
                    ->panelLayout('grid'),
                Select::make('facilities')
                    ->label('Fasilitas')
                    ->options(Facility::where('is_active', '=', true)->get()->pluck('name', 'id'))
                    ->preload()
                    ->multiple(),
                Repeater::make('packages')
                    ->label('Paket Wisata')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul'),
                        CheckboxList::make('destinations')
                            ->options(Destination::where('is_active', '=', true)->get()->pluck('name', 'id'))
                            ->searchable()
                            ->columns(2)
                    ])
                    ->addActionLabel('Tambah Paket')
                    ->collapsible()
                    ->collapsed(true)
                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                    ->reorderable(),
                Textarea::make('term_condition')
                    ->label('Informasi Tambahan')
                    ->rows(4)
                    ->maxLength(500),
                Select::make('contact_person')
                    ->label('Kontak')
                    ->options(Contact::where('is_active', '=', true)->get()->pluck('alias', 'id'))
                    ->preload()
                    ->multiple(),
                Toggle::make('is_active')
                    ->default(true)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Stack::make([
                    TextColumn::make('title')
                        ->label('Judul'),
                    TextColumn::make('slug')
                        ->label('Slug')
                        ->badge()
                        ->color('info')
                ])
                ->space(2)
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageTravelCatalogues::route('/'),
        ];
    }
}
