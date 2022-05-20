<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory , SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['client_id' , 'title' , 'address' , 'lat_lng'];

}
