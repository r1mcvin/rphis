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
        Schema::create('faltas', function (Blueprint $table) {
            $table->id();
            $table->string('control_number')->unique();
            // er main, main pharmacy, opd pharmacy, annex pharmacy, bucas pharmacy,scu pharmacy
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('requested_by_id');
            $table->unsignedBigInteger('prepared_by_id');
            $table->unsignedBigInteger('delivered_by_id');
            $table->unsignedBigInteger('checked_and_validated_by_id');
            $table->date('requested_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faltas');
    }
};
