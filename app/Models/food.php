<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    use HasFactory;
    protected $table = 'food';
    
    protected $fillable = [
        'food_name',
        'food_image',
        'food_description',
        'food_price',
        'food_category_id',
    ];

    public function foodCategory()
    {
        return $this->belongsTo(FoodCategory::class);
    }
}
