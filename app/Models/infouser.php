<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infouser extends Model
{
    use HasFactory;
    protected $table='infousers';

    public function User(){
        return $this->belongsTo(User::class);
    }
}
