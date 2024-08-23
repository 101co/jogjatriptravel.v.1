<?php

namespace App\Filament\Resources\Master;

use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Master\Role;
use Filament\Resources\Resource;
use Filament\Support\Enums\IconSize;
use Filament\Support\Enums\MaxWidth;
use Filament\Support\Enums\ActionSize;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\Master\RoleResource\Pages;

class RoleResource extends Resource
{
    protected static ?string $model = Role::class;

    protected static ?string $navigationGroup = 'Master';
    protected static ?string $navigationLabel = 'Role';
    protected static ?string $slug = 'role';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 3;

    public static function canViewAny(): bool
    {
        return authUserMenu('JTTAM003', auth()->user()->id);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('initial')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(10)
                    ->columnSpanFull(),
                TextInput::make('name')
                    ->required()
                    ->label('Role')
                    ->maxLength(100)
                    ->columnSpanFull(),
                TextInput::make('description')
                    ->label('Role Description')
                    ->maxLength(100)
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('initial')
                    ->searchable(),
                TextColumn::make('name')
                    ->label('Role')
                    ->searchable(),
                TextColumn::make('description')
                    ->label('Role Description')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make()
                    ->iconSize(IconSize::Small)
                    ->modalAutofocus(false)
                    ->size(ActionSize::ExtraSmall)
                    ->modalHeading('Edit User')
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
            'index' => Pages\ManageRoles::route('/'),
        ];
    }
}
