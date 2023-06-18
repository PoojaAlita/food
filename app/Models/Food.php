<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'food_item',
        'description',
        'pickup_date',
        'pickup_address',
        'state_id',
        'city_id',
        'contact_person',
        'contact_person_mobile_number',
        'accept_food',
    ];
    protected $casts = [ 'pickup_date'=>'datetime'];


      /* Relation To State*/
      public function state()
      {
         return $this->hasOne(State::class, 'id', 'state_id');
      }
        /* Relation To State*/
    public function city()
    {
       return $this->hasOne(City::class, 'id', 'city_id');
    }
}
