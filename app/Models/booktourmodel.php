<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booktourmodel extends Model
{
    use HasFactory;

    protected $table='booktours';

    protected $fillable = [
        'id_book_tour',
        'number_of_adults',
        'number_of_children',
        'sum_money' ,
    
        'date_book',
      
        'thanhtoan',
        'user_id',
        'tour_id',

    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Tour(){
        return $this->belongsTo(Tour::class);
    }


}
