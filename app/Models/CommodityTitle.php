<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommodityTitle extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
        'commodity_type_id'
    ];

    public function commodityType()
    {
        return $this->belongsTo(CommodityType::class);
    }
}
