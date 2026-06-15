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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            // master stock
            $table->unsignedBigInteger('inventory_id');
            $table->unsignedBigInteger('supplier_id');
            // medicine classification (Analgesic)
            $table->string('lot_number');
            $table->unsignedBigInteger('manufacturer_id')->nullable();
            $table->date('date_received');
            $table->string('received_by');
            $table->date('expiration_date');
            $table->integer('quantity');
            // always update the latest price of medicine
            $table->double('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
