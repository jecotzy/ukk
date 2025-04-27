<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderItemResource\Pages;
use App\Models\OrderItem;
use App\Models\Product;
use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class OrderItemResource extends Resource
{
    protected static ?string $model = OrderItem::class;
    protected static ?string $navigationGroup = 'E-commerce';
    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('order_id')
                ->relationship('order', 'id')
                ->required(),

            Select::make('product_id')
                ->relationship('product', 'product_name')
                ->required()
                ->reactive()
                ->afterStateUpdated(function ($state, callable $get, callable $set) {
                    $product = Product::find($state);
                    $qty = $get('quantity') ?? 1;
                    if ($product) {
                        $set('subtotal', $product->price * $qty);
                    }
                }),

            TextInput::make('quantity')
                ->numeric()
                ->default(1)
                ->required()
                ->reactive()
                ->afterStateUpdated(function ($state, callable $get, callable $set) {
                    $productId = $get('product_id');
                    $product = Product::find($productId);
                    if ($product) {
                        $set('subtotal', $product->price * $state);
                    }
                }),

            TextInput::make('subtotal')
                ->numeric()
                ->required()
                ->disabled()
                ->dehydrated()
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('order.id')->label('Order ID'),
            TextColumn::make('product.product_name')->label('Product'),
            TextColumn::make('quantity'),
            TextColumn::make('subtotal')->money('IDR'),
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
