<?php

namespace App\Filament\Resources\Setting\RoleMenuUserResource\RelationManagers;

use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Master\Menu;
use Filament\Support\Enums\MaxWidth;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Resources\RelationManagers\RelationManager;

class RoleMenuUserMenuRelationManager extends RelationManager
{
    protected static string $relationship = 'roleMenuUserMenu';
    protected static ?string $title = 'Menu';
    protected static ?string $icon = 'heroicon-m-list-bullet';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('menu_id')
                    ->preload()
                    ->searchable()
                    ->columnSpanFull()
                    ->relationship('menu', 'code')
                    ->getOptionLabelFromRecordUsing(fn (Menu $record) => "{$record->code} - {$record->name}")
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('menu_id')
            ->columns([
                TextColumn::make('menu.code'),
                TextColumn::make('menu.name'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make()
                    ->slideOver()
                    ->label('Add Menu')
                    ->modalWidth(MaxWidth::Medium)
                    ->modalSubmitActionLabel('Add')
                    ->createAnother(false)
                    ->mutateFormDataUsing((function (array $data): array 
                    {
                        try 
                        {
                            $data['created_by'] = auth()->user()->username;
                            $data['updated_by'] = auth()->user()->username;
                            return $data;
                        } 
                        catch (\Throwable $th) 
                        {
                            dd($th);
                        }
                    })),
            ])
            ->actions([
                EditAction::make()
                    ->slideOver()
                    ->modalWidth(MaxWidth::Medium),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->deferLoading();
    }
}
