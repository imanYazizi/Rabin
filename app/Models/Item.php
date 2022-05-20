<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'item_category_id',
        'image',
        'available',
        'is_special',
        'name',
        'price',
        'description'
    ];

    public function cart()
    {
        return $this->morphOne(Cart::class , 'itemable');
    }

    public function favorite()
    {
        return $this->morphOne(Favorite::class , 'itemable');
    }

    public function category()
    {
        return $this->hasOne(ItemCategory::class, 'id', 'item_category_id');
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class , IngredientToItem::class);
    }

    public function getCategoryNameAttribute()
    {
        return $this->category->name;
    }
}
