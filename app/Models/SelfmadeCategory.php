<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SelfmadeCategory extends Model
{
    use HasFactory , SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name' ,
        'image',
        'type'
    ];

    public function selfmades()
    {
        return $this->hasMany(Selfmade::class);
    }
}
