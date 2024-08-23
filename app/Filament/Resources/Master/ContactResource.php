<?php

namespace App\Filament\Resources\Master;

use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Master\Contact;
use Filament\Resources\Resource;
use Filament\Support\Enums\IconSize;
use Filament\Support\Enums\MaxWidth;
use Filament\Forms\Components\Toggle;
use Filament\Support\Enums\ActionSize;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\Master\ContactResource\Pages;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationGroup = 'Master';
    protected static ?string $navigationLabel = 'Contact';
    protected static ?string $slug = 'contact';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 4;

    public static function canViewAny(): bool
    {
        return authUserMenu('JTTAM004', auth()->user()->id);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->maxLength(100)
                    ->columnSpanFull(),
                TextInput::make('alias')
                    ->maxLength(50)
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->columnSpanFull(),
                TextInput::make('phone')
                    ->label('Phone Number')
                    ->maxLength(15)
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('is_contact_person')
                    ->label('Contact Person')
                    ->default(false)
                    ->required(),
                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('alias')
                    ->label('Contact Alias')
                    ->searchable(),
                TextColumn::make('phone')
                    ->label('Phone Number')
                    ->searchable(),
                IconColumn::make('is_contact_person')
                    ->label('Contact Person')
                    ->boolean(),
                IconColumn::make('is_active')
                    ->label('active')
                    ->boolean()
            ])
            ->filters([
                //
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
            'index' => Pages\ManageContacts::route('/'),
        ];
    }
}
