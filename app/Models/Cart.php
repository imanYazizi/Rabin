<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'itemable_id', 'count', 'order_id'];

    protected $appends = ['is_menu', 'amount'];

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

    public function getAmountAttribute()
    {
        return $this->itemable->price * $this->count;
    }

    /*public function getTotalPriceAttribute()
    {
        $price = $this->count * $this->amount;

        return $price;
    }*/


}
