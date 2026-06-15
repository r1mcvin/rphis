<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DosageForm extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'form_name'
    ];
}
