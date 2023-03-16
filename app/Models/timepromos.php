<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timepromos extends Model
{
    use HasFactory;
    
    protected $table = 'timepromos';

    protected $fillable = [
        'end_promo',
    ];

    public function food()
    {
        return $this->hasMany(promo::class);
    }
}
