<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /** @use HasFactory<\Database\Factories\CarFactory> */
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'engine',
        'quantity',
        'price_per_day',
        'status',
        'image',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
