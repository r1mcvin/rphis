<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'inventory_id',
        'supplier_id',
        'lot_number',
        'manufacturer_id',
        'date_received',
        'received_by',
        'expiration_date',
        'quantity',
        'price'
    ]
}
