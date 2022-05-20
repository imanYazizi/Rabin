<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PizzaToSelfmade extends Model
{
    use HasFactory;

    protected $fillable = [
        'pizza_id',
        'selfmade_id' ,
        'amount' ,
        'price'
    ];
}
