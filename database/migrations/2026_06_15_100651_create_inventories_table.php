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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('item_code')->unique();
            $table->unsignedBigInteger('commodity_title_id');
            $table->string('generic_name'); 
            // medicine classification (Analgesic)
            $table->unsignedBigInteger('classification_id');
            $table->integer('dosage_strength_value');
            $table->unsignedBigInteger('dosage_strength_unit_id');
            $table->unsignedBigInteger('dosage_form_id');
            $table->unsignedBigInteger('unit_id');
            $table->integer('quantity');
            // always update the latest price of medicine
            $table->double('current_price');
            $table->double('prev_price')->nullable();
            $table->timestamps();
        });
    }
//     Column Name	Description	Example
// Item Code / SKU	Unique identifier for the medicine	MED-001
// Medicine Name	Generic or brand name	Paracetamol
// Generic Name	Active ingredient	Acetaminophen
// Brand Name	Commercial brand (if applicable)	Biogesic
// Category	Medicine classification	Analgesic
// Dosage Strength	Concentration or strength	500 mg
// Dosage Form	Tablet, capsule, syrup, etc.	Tablet
// Unit of Measure	Smallest dispensing unit	Tablet
// Packaging Unit	How stock is purchased/stored	Box of 100 tablets
// Batch / Lot Number	Manufacturer batch number	B230415
// Supplier	Vendor name	ABC Pharma
// Manufacturer	Company producing the medicine	XYZ Labs
// Date Received	Date stock arrived	2026-06-15
// Expiration Date	Product expiry date	2028-06-30
// Quantity Received	Amount received	1,000 tablets
// Beginning Stock	Starting inventory	500
// Stock In	Additional stock received	1,000
// Stock Out	Quantity dispensed/issued	200
// Current Stock	Available balance	1,300
// Reorder Level	Minimum stock before reordering	300
// Unit Cost	Cost per unit	₱1.50
// Total Value	Current Stock × Unit Cost	₱1,950
// Storage Location	Shelf, cabinet, room	Shelf A-2
// Status	Active, Expired, Near Expiry	Active
// Remarks	Additional notes	Expires in 24 months
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
