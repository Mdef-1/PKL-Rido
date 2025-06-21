<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->string('slug')->unique();
            $table->foreignId('category_ id')
                ->constrained('categories')
                ->onDelete('cascade');
            $table->text('deskripsi')->nullable();
            $table->decimal('harga', 10, 2);
            $table->UnsignedBigInteger('stok')->default(0); // Menyimpan jumlah stok produk
            $table->string('gambar')->nullable();
            $table->boolean('is_active')->default(true); // Menandakan apakah produk aktif atau tidak
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
