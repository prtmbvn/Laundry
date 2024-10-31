<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\LaundryItem;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LaundryItemResource\Pages;
use App\Filament\Resources\LaundryItemResource\RelationManagers;

class LaundryItemResource extends Resource
{
    protected static ?string $model = LaundryItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static ?string $navigationLabel = 'Laundry Item';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                    Select::make('transaction_id')
                        ->relationship('transaction', 'id')
                        ->required()
                        ->label('Transaction ID'),
                    TextInput::make('item_type')
                        ->required()
                        ->label('Item Type'),
                    TextInput::make('quantity')
                        ->numeric()
                        ->required()
                        ->label('Quantity'),
                    TextInput::make('price_per_item')
                        ->numeric()
                        ->required()
                        ->label('Price Per Item'),
                    TextInput::make('subtotal')
                        ->numeric()
                        ->required()
                        ->label('Subtotal'),
                    ])
                    ]);
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('transaction_id')
                ->label('Transaction ID')->sortable()->searchable(),
            TextColumn::make('item_type')
                ->label('Item Type')->searchable(),
            TextColumn::make('quantity')
                ->label('Quantity'),
            TextColumn::make('price_per_item')
                ->label('Price Per Item')
                ->money('IDR'), // Menampilkan format mata uang
            TextColumn::make('subtotal')
                ->label('Subtotal')
                ->money('IDR'), // Menampilkan format mata uang
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
            'index' => Pages\ListLaundryItems::route('/'),
            'create' => Pages\CreateLaundryItem::route('/create'),
            'edit' => Pages\EditLaundryItem::route('/{record}/edit'),
        ];
    }
}
