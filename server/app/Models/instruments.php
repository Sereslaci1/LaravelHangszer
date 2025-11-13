<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instruments extends Model
{
    /** @use HasFactory<\Database\Factories\InstrumentsFactory> */
    use HasFactory;
    public $timestamps = false;
    public $fillable = [
        'name',
        'description',
        'brand',
        'price',
        'quantity',
    ];
}
