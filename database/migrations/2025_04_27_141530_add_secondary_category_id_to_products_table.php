<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Menambahkan kolom untuk kategori sekunder
            $table->unsignedBigInteger('secondary_category_id')
                  ->nullable()
                  ->after('category_id');
            // Menambahkan foreign key constraint
            $table->foreign('secondary_category_id')
                  ->references('id')
                  ->on('categories')
                  ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Menghapus foreign key dan kolom
            $table->dropForeign(['secondary_category_id']);
            $table->dropColumn('secondary_category_id');
        });
    }
};
