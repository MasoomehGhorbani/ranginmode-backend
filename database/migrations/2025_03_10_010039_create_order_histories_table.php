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
        Schema::create('order_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('guest_id')->nullable();
            $table->decimal('total_price',  10, 2);
            $table->json('address')->nullable();
            $table->string('authority')->nullable();
            $table->string('tracking_code')->nullable();
            $table->enum('status', ['success', 'pending', 'failed'])->default('pending');
            $table->enum('process', ['review', 'progress', 'completed', 'sent', 'canceled'])->default('review');
            $table->boolean('is_checked')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_histories');
    }
};
