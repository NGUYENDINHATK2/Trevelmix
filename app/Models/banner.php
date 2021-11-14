<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'img',
        'tour_id',
        'show'
    ];
    public function Tour(){
        return $this->belongsTo(Tour::class);
    }
}
