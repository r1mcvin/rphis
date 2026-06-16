<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaltasItem extends Model
{
    protected $fillable = [
        'faltas_id',
        'inventory_id',
        'requested_qty',
        'issued_qty',
        'received_qty',
        'remarks'
    ];

    public function faltas()
    {
        return $this->belongsTo(Faltas::class, 'faltas_id');
    }
}
