<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Couponts extends Model
{
    use HasFactory;

    protected $table = 'couponts';

    protected $fillable = [
        'coupont_code',
        'discount',
        'expired_at',
    ];
}
