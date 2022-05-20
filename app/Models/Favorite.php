<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = ['client_id' , 'itemable_id' , 'itemable_type'];

    public function itemable()
    {
        return $this->morphTo();
    }

    public function getIsMenuAttribute()
    {
        if ($this->itemable instanceof Item)
            return true;
        return false;
    }
}
