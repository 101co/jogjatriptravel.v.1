<?php

namespace App\Filament\Resources\Setting\RoleMenuUserResource\RelationManagers;

use App\Models\User;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Support\Enums\MaxWidth;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Resources\RelationManagers\RelationManager;

class RoleMenuUserUserRelationManager extends RelationManager
{
    protected static string $relationship = 'roleMenuUserUser';
    protected static ?string $title = 'User';
    protected static ?string $icon = 'heroicon-o-user-group';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->preload()
                    ->searchable()
                    ->columnSpanFull()
                    ->relationship('user', 'name')
                    ->getOptionLabelFromRecordUsing(fn (User $record) => "{$record->name} ({$record->email})")
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('user_id')
            ->columns([
                TextColumn::make('user.name'),
                TextColumn::make('user.email'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make()
                    ->slideOver()
                    ->label('Add User')
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
                    ->label('Add User')
                    ->modalHeading('Edit Selected User')
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
