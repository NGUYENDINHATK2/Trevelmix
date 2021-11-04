<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagestours extends Model
{
    use HasFactory;


    protected $table='imagestours';
    protected $fillable = [
        'img1',
        'img2',
        'img3',
        'img4',
        'img5',
        'img6',
        'img7',
        'img8',
        'img9',
        'img10',
        'id_img_tour'
        
    ];
}
