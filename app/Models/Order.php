<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;

//    protected $dates = ['deleted_at'];

    protected $fillable = ['client_id', 'address_id', 'is_pay', 'status', 'order_number'];

    protected $appends = ['total_price'];


    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'id', 'address_id');
    }

    public function client()
    {
        return $this->hasOne(Client::class, 'id', 'client_id');
    }

    public function getTotalPriceAttribute()
    {
        $price = 0;

        $price = $this->carts->sum('amount');

        return $price;
    }

}
