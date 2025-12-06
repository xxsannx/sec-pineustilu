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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            // One of these must be filled: unit_id (for glamping), item_id (for additional items), or outbond_id (for outbond activities)
            $table->foreignId('unit_id')->nullable()->constrained('area_units')->cascadeOnDelete();
            $table->foreignId('item_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('outbond_id')->nullable()->constrained('outbonds')->cascadeOnDelete();
            $table->foreignId('season_id')->constrained('season_dates')->cascadeOnDelete();
            $table->decimal('price', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
