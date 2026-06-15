<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'item_code',
        'commodity_title_id',
        'generic_name',
        'classification_id',
        'dosage_strength_value',
        'dosage_strength_unit_id',
        'unit_id',
        'quantity',
        'current_price',
        'prev_price',
    ];

    public function commodityTitle()
    {
        return $this->belongsTo(CommodityTitle::class);
    }

    public function classification()
    {
        return $this->belongsTo(Classification::class);
    }
}
