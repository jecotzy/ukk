<?php

namespace App\Filament\Resources;

use App\Models\Order;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Select::make('user_id')
                ->relationship('user', 'name') // Relasi ke User
                ->required(),
            DateTimePicker::make('order_date')
                ->default(now()) // Set default ke waktu sekarang
                ->required(),
            TextInput::make('total_amount')
                ->numeric()
                ->required()
                ->prefix('Rp'),
            Select::make('status')
                ->options([
                    'pending' => 'Pending',
                    'processing' => 'Processing',
                    'shipped' => 'Shipped',
                    'delivered' => 'Delivered',
                ])
                ->default('processing')
                ->required(),
            Textarea::make('delivery_address')
                ->required(),
            TextInput::make('tracking_number')
                ->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('user.name')->label('Customer'),
            TextColumn::make('order_date')->dateTime()->label('Order Date'),
            TextColumn::make('total_amount')->money('IDR')->label('Total Amount'),
            TextColumn::make('status')->label('Status'),
            TextColumn::make('delivery_address')->label('Delivery Address'),
            TextColumn::make('tracking_number')->label('Tracking Number'),
            TextColumn::make('created_at')->dateTime()->label('Created At'),
        ]);
    }

    public static function getPages(): array
{
    return [
        'index' => \App\Filament\Resources\OrderResource\Pages\ListOrders::route('/'),
        'create' => \App\Filament\Resources\OrderResource\Pages\CreateOrder::route('/create'),
        'edit' => \App\Filament\Resources\OrderResource\Pages\EditOrder::route('/{record}/edit'),
    ];
}

}

