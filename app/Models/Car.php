<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    protected $table = 'cars';

    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
