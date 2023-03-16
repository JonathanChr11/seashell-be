<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promo extends Model
{
    use HasFactory;
    protected $table = 'promos';

    protected $fillable = [
        'food_id',
        'end_promo_id'
    ];

    public function food()
    {
        return $this->hasOne(timepromos::class);
    }
}
