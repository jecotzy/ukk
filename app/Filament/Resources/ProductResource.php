<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $navigationIcon = 'heroicon-o-cube';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('product_name')
                ->label('Product Name')
                ->required(),

            Forms\Components\Textarea::make('description')
                ->required(),

            Forms\Components\TextInput::make('price')
                ->numeric()
                ->required()
                ->prefix('Rp'),

            Forms\Components\TextInput::make('stock')
                ->numeric()
                ->required(),

                Forms\Components\Select::make('category_id')
                ->relationship('category', 'category_name') // ✅ betul, sesuai kolom di DB
                ->required(),
            

            Forms\Components\FileUpload::make('image_url')
                ->label('Product Image')
                ->directory('img') // -> disimpan di public/storage/img
                ->disk('public')
                ->visibility('public')
                ->image()
                ->imagePreviewHeight('150')
                ->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('product_name')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('price')->money('IDR', true),
            Tables\Columns\TextColumn::make('stock'),
            Tables\Columns\TextColumn::make('category.category_name')->label('Category'), // ✅ ini juga


            ImageColumn::make('image_url')
    ->label('Product Image')
    ->disk('public') // tetap
    ->visibility('public')
    ->height(60)
    ->width(60),


            Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
