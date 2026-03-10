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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained('bookings')->cascadeOnDelete();
            $table->string('order_id')->unique();
            $table->string('transaction_id')->nullable();
            $table->string('payment_type')->nullable(); // bank_transfer, e-wallet, credit_card, etc
            $table->string('transaction_status')->default('pending'); // pending, success, failed, expired
            $table->string('payment_code')->nullable();
            $table->string('fraud_status')->nullable();
            $table->decimal('gross_amount', 15, 2);
            $table->string('bank')->nullable();
            $table->string('va_number')->nullable();
            $table->text('qr_string')->nullable();
            $table->text('deeplink_url')->nullable();
            $table->text('snaptoken')->nullable();
            $table->timestamp('expired_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
