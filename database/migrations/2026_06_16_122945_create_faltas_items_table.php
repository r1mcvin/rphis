<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migraticons.
     */
    public function up(): void
    {
        Schema::create('faltas_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('faltas_id');
            $table->unsignedBigInteger('inventory_id');
            $table->integer('requested_qty');
            $table->integer('issued_qty');
            $table->integer('received_qty');
            $table->longText('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faltas_items');
    }
};
