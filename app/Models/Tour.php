<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'tour_code',
        'name_tour',
        'time_tour',
        'price_adults',
        'price_children',
        'sale',
        'gift',
        'departure_day',
        'receiving_address',
        'status' ,
        'amountofpeople',
    ];

    public function Tour_details(){
        return $this->hasOne(tour_details::class);
    }

    public function Img_tour(){
        return $this->hasOne(imagestours::class);
    }
}
