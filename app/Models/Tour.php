<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_tour',
        'time_tour',
        'price_adults',
        'price_children',
        'sale',
        'gift',
        'departure_day',
        'receiving_address',
    ];
}
