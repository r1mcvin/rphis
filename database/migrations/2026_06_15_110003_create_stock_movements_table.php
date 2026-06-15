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
        Schema::create('stock_movements', function (Blueprint $table) {
            $table->id();
            // prioritized expiration date
            $table->unsignedBigInteger('stock_id');
            $table->integer('quantity');
            $table->enum('movement_type', ['in', 'out']);
            $table->unsignedBiginteger('purpose_id');
            $table->date('movement_date');
            $table->string('movement_from')->nullable();
            $table->unsignedBigInteger('issuing_office')->nullable();
            $table->unsignedBigInteger('receiving_office')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_movements');
    }
};
