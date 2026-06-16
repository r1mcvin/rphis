<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faltas extends Model
{
    protected $fillable = [
        'control_number',
        'location_id',
        'requested_by_id',
        'prepared_by_id',
        'delivered_by_id',
        'checked_and_validated_by_id',
        'requested_date'
    ];
}
