<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'food_id',
        'name',
        'email',
        'status'
    ];
}
