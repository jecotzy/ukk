<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentResource\Pages;
use App\Models\Payment;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PaymentResource extends Resource
{
    protected static ?string $model = Payment::class;

    protected static ?string $navigationGroup = 'E-commerce';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Select::make('order_id')
                ->relationship('order', 'id')
                ->required(),

            Select::make('payment_method')
                ->options([
                    'credit_card' => 'Credit Card',
                    'paypal' => 'PayPal',
                    'bank_transfer' => 'Bank Transfer',
                ])
                ->required(),

            TextInput::make('transaction_id'),

            TextInput::make('amount')
                ->numeric()
                ->required(),

            Select::make('payment_status')
                ->options([
                    'paid' => 'Paid',
                    'pending' => 'Pending',
                    'failed' => 'Failed',
                ])
                ->required(),

            TextInput::make('address'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('order.id')->label('Order ID'),
            TextColumn::make('payment_method')->label('Method'),
            TextColumn::make('transaction_id')->label('Transaction ID'),
            TextColumn::make('amount')->money('IDR'),
            TextColumn::make('payment_status')->label('Status'),
            TextColumn::make('created_at')->dateTime(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPayments::route('/'),
            'create' => Pages\CreatePayment::route('/create'),
            'edit' => Pages\EditPayment::route('/{record}/edit'),
        ];
    }
}
