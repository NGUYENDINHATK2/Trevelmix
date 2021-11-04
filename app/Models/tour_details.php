<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tour_details extends Model
{
    use HasFactory;
    protected $table='tour_details';
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
