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
        Schema::create('order_history_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_history_id')->constrained()->onDelete('set null');
            $table->foreignId('product_id')->constrained()->onDelete('set null');
            $table->foreignId('variant_id')->constrained()->onDelete('set null');
            $table->integer('quantity')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_history_items');
    }
};
