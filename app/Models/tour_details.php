<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tour_details extends Model
{
    use HasFactory;
    protected $table='tour_details';
    protected $fillable = [
        'title',
        'description',
        'experience_tour',
        'title_day_1',
        'description_day_1',
        'title_day_2',
        'description_day_2',
        'title_day_3',
        'description_day_3',
        'title_day_back',
        'description_day_back',
        'tour_id',
    ];
}
