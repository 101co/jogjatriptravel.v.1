<?php

namespace App\Filament\Resources\Master;

use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Master\Menu;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\Master\MenuResource\Pages;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationGroup = 'Master';
    protected static ?string $navigationLabel = 'Menu';
    protected static ?string $slug = 'menu';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 2;

    public static function canViewAny(): bool
    {
        return authUserMenu('JTTAM002', auth()->user()->id);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('menu_category_id')
                    ->required()
                    ->columnSpanFull()
                    ->relationship(name: 'menuCategory', titleAttribute: 'name')
                    ->createOptionForm([
                        TextInput::make('initial')
                            ->required()
                            ->unique(),
                        TextInput::make('name')
                            ->required()
                    ]),                
                TextInput::make('code')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(10)
                    ->columnSpanFull(),
                TextInput::make('name')
                    ->required()
                    ->maxLength(100)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('code')
                    ->searchable(),
                TextColumn::make('name')
                    ->label('Description')
                    ->searchable(),
                TextColumn::make('menuCategory.name')
                    ->searchable()
                    ->label('Category')
            ])
            ->filters([
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
            'index' => Pages\ManageMenus::route('/'),
        ];
    }
}
