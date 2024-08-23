<?php

namespace App\Filament\Resources\Setting;

use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\Setting\RoleMenuUser;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\Setting\RoleMenuUserResource\Pages;
use App\Filament\Resources\Setting\RoleMenuUserResource\RelationManagers\RoleMenuUserMenuRelationManager;
use App\Filament\Resources\Setting\RoleMenuUserResource\RelationManagers\RoleMenuUserUserRelationManager;

class RoleMenuUserResource extends Resource
{
    protected static ?string $model = RoleMenuUser::class;

    protected static ?string $navigationGroup = 'Setting';
    protected static ?string $navigationLabel = 'Role Menu User';
    protected static ?string $slug = 'role-menu-user';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 1;

    public static function canViewAny(): bool
    {
        return authUserMenu('JTTAX001', auth()->user()->id);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Split::make([
                    Section::make([
                        Select::make('role_id')
                            ->label('Role')
                            ->relationship('role', 'name')
                            ->unique(ignoreRecord: true)
                            ->searchable()
                            ->preload()
                            ->required()
                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('role.initial')
                    ->searchable(),
                TextColumn::make('role.name')
                    ->searchable()
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->deferLoading();
    }

    public static function getRelations(): array
    {
        return [
            RoleMenuUserMenuRelationManager::class,
            RoleMenuUserUserRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRoleMenuUsers::route('/'),
            'create' => Pages\CreateRoleMenuUser::route('/create'),
            'edit' => Pages\EditRoleMenuUser::route('/{record}/edit'),
        ];
    }
}
