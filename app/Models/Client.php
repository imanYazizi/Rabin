<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Client extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $hidden = ['password'];
    protected $appends = ['is_admin'];

    protected $fillable = [
        'name',
        'phone',
        'avatar',
        'email',
        'country_id',
        'password',
        'phone_code',
        'email_code',
    ];

    public function getIsAdminAttribute()
    {
        return false;
    }


    public function orders()
    {
        return $this->hasMany(Order::class, 'client_id', 'id');
    }
}
