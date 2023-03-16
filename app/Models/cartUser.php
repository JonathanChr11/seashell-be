<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cartUser extends Model
{
    use HasFactory;

    protected $table = 'cart_users';

    protected $fillable = [
        'users_id',
        'food_id',
        'quantity',
    ];
}
