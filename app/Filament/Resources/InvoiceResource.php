<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Invoice;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\InvoiceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\InvoiceResource\RelationManagers;

class InvoiceResource extends Resource
{
    protected static ?string $model = Invoice::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Invoice';

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
                    TextInput::make('invoice_number')
                        ->required()
                        ->unique(ignoreRecord: true)
                        ->label('Invoice Number'),
                    DatePicker::make('invoice_date')
                        ->required()
                        ->label('Invoice Date'),
                    Select::make('customer_id')
                        ->relationship('customer', 'name')
                        ->required()
                        ->label('Customer'),
                    TextInput::make('total_amount')
                        ->numeric()
                        ->required()
                        ->label('Total Amount'),
                    TextInput::make('tax')
                        ->numeric()
                        ->default(0)
                        ->label('Tax'),
                    TextInput::make('discount')
                        ->numeric()
                        ->default(0)
                        ->label('Discount'),
                    TextInput::make('grand_total')
                        ->numeric()
                        ->required()
                        ->label('Grand Total'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('transaction_id')
                    ->label('Transaction ID'),
                TextColumn::make('invoice_number')
                    ->label('Invoice Number'),
                TextColumn::make('invoice_date')
                    ->label('Invoice Date')
                    ->date(),
                TextColumn::make('customer.name')
                    ->label('Customer'),
                TextColumn::make('total_amount')
                    ->label('Total Amount')
                    ->money('IDR'),
                TextColumn::make('tax')
                    ->label('Tax')
                    ->money('IDR'),
                TextColumn::make('discount')
                    ->label('Discount')
                    ->money('IDR'),
                TextColumn::make('grand_total')
                    ->label('Grand Total')
                    ->money('IDR'),
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
            'index' => Pages\ListInvoices::route('/'),
            'create' => Pages\CreateInvoice::route('/create'),
            'edit' => Pages\EditInvoice::route('/{record}/edit'),
        ];
    }
}
