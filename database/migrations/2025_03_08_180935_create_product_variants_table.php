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
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->string('name')->required();
            $table->integer('quantity')->required()->min(0);
            $table->decimal('price', 10, 2)->required();
            $table->decimal('final_price', 10, 2)->required();
            $table->integer('discount')->required()->min(0)->max(100);
            $table->foreignId('product_id')->constrained()->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
