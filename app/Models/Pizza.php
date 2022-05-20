<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pizza extends Model
{
    use HasFactory , SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'client_id',
        'image',
        'name',
        'is_favorite',
        'price',
    ];

    public function cart()
    {
        return $this->morphOne(Cart::class , 'itemable');
    }

    public function favorite()
    {
        return $this->morphOne(Favorite::class , 'itemable');
    }

    public function selfmades()
    {
        return $this->belongsToMany(Selfmade::class , PizzaToSelfmade::class , 'pizza_id' , 'selfmade_id');
    }

}
