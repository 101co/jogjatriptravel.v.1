<?php

namespace App\Filament\Resources\Master;

use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Master\Facility;
use Filament\Resources\Resource;
use Filament\Support\Enums\IconSize;
use Filament\Support\Enums\MaxWidth;
use Filament\Forms\Components\Toggle;
use Filament\Support\Enums\ActionSize;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\Master\FacilityResource\Pages;

class FacilityResource extends Resource
{
    protected static ?string $model = Facility::class;

    protected static ?string $navigationGroup = 'Master';
    protected static ?string $navigationLabel = 'Facility';
    protected static ?string $slug = 'facility';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 6;

    public static function canViewAny(): bool
    {
        return authUserMenu('JTTAM006', auth()->user()->id);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(100)
                    ->columnSpanFull(),
                TextInput::make('icon_name')
                    ->required()
                    ->maxLength(100)
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->default(true)
                    ->label('Active')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
            ])
            ->filters([
            ])
            ->actions([
                EditAction::make()
                    ->iconSize(IconSize::Small)
                    ->modalAutofocus(false)
                    ->size(ActionSize::ExtraSmall)
                    ->modalHeading('Edit Contact')
                    ->modalWidth(MaxWidth::Medium)
                    ->mutateFormDataUsing(function (array $data): array  
                    {
                        $data['updated_by'] = auth()->user()->username;
                        return $data;
                    }),
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
            'index' => Pages\ManageFacilities::route('/'),
        ];
    }
}
