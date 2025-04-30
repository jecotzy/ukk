<?php

// app/Filament/Resources/ProductResource.php

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
                ->numeric()->required()->prefix('Rp'),

            Forms\Components\TextInput::make('stock')
                ->numeric()->required(),

            // **Ubah di sini**: pakai nama relasi primaryCategory
            Forms\Components\Select::make('category_id')
                ->label('Primary Category')
                ->relationship('primaryCategory', 'category_name')
                ->required(),

            // Secondary Category tetap pakai relasi secondaryCategory
            Forms\Components\Select::make('secondary_category_id')
                ->label('Secondary Category')
                ->relationship('secondaryCategory', 'category_name')
                ->nullable(),

            Forms\Components\FileUpload::make('image_url')
                ->label('Product Image')
                ->directory('img')
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

            // **Ubah di sini**: ambil dari primaryCategory
            Tables\Columns\TextColumn::make('primaryCategory.category_name')
                ->label('Primary Category'),

            Tables\Columns\TextColumn::make('secondaryCategory.category_name')
                ->label('Secondary Category'),

            ImageColumn::make('image_url')
                ->label('Product Image')
                ->disk('public')
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
            'index'  => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit'   => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
