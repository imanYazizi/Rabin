<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Selfmade extends Model
{
    use HasFactory , SoftDeletes;
    protected $dates = ['deleted_at'];


    protected $fillable = [
        'selfmade_category_id',
        'image',
        'name',
        'price',
        'amount_1x',
        'amount_2x',
        'amount_3x',
    ];

    public function category() {
        return $this->hasOne(SelfmadeCategory::class, 'id', 'selfmade_category_id');
    }


    public function getCategoryNameAttribute()
    {
        return $this->category->name;
    }
}
