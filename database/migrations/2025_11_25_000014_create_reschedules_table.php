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
        Schema::create('reschedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('old_book_id')->constrained('bookings')->cascadeOnDelete();
            $table->foreignId('new_book_id')->constrained('bookings')->cascadeOnDelete();
            $table->date('reschedule_date');
            $table->decimal('reschedule_fee', 15, 2)->default(0);
            $table->text('reason')->nullable();
            $table->string('status')->default('pending'); // pending, approved, rejected
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reschedules');
    }
};
