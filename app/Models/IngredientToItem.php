<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientToItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'ingredient_id',
        'amount',
    ];
}
