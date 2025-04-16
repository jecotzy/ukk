<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderItemResource\Pages;
use App\Models\OrderItem;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class OrderItemResource extends Resource
{
    protected static ?string $model = OrderItem::class;

    // Tambahkan agar muncul di sidebar
    protected static ?string $navigationGroup = 'E-commerce';
    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('order_id')
                ->relationship('order', 'id')
                ->required(),

            Select::make('product_id')
                ->relationship('product', 'name')
                ->required()
                ->reactive()
                ->afterStateUpdated(function ($state, callable $get, callable $set) {
                    $product = \App\Models\Product::find($state);
                    $quantity = $get('quantity') ?? 1;
                    if ($product) {
                        $set('subtotal', $quantity * $product->price);
                    }
                }),

            TextInput::make('quantity')
                ->numeric()
                ->required()
                ->reactive()
                ->afterStateUpdated(function ($state, callable $get, callable $set) {
                    $productId = $get('product_id');
                    $product = \App\Models\Product::find($productId);
                    if ($product) {
                        $set('subtotal', $state * $product->price);
                    }
                }),

            TextInput::make('subtotal')
                ->numeric()
                ->disabled()
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('order.id')->label('Order ID'),
            TextColumn::make('product.name')->label('Product'),
            TextColumn::make('quantity')->label('Qty'),
            TextColumn::make('subtotal')->money('IDR')->label('Subtotal'),
            TextColumn::make('created_at')->dateTime()->label('Created'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrderItems::route('/'),
            'create' => Pages\CreateOrderItem::route('/create'),
            'edit' => Pages\EditOrderItem::route('/{record}/edit'),
        ];
    }
}
