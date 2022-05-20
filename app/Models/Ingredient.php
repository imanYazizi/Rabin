<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ingredient extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'image',
        'ingredient_category_id',
    ];

    public function category()
    {
        return $this->hasOne(IngredientCategory::class, 'id', 'ingredient_category_id');
    }
}
