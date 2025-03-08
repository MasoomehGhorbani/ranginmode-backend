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
            $table->string('name')->required();
            $table->string('description')->required();
            $table->json('information')->default('[]');
            $table->json('images')->default('[]');
            $table->boolean('is_active')->default(true);
            $table->foreignId('category_id')->constrained()->onDelete('set null');
            $table->json('product_variant_ids')->default('[]');
            $table->integer('default_variant_index')->default(0);
            $table->foreignId('brand_id')->constrained()->onDelete('set null');
            $table->decimal('first_variant_final_price', 10, 2)->default(0);
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
