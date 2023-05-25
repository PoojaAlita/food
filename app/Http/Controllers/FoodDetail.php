<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{FoodDetail};


class FoodDetail extends Controller
{
     /*Dashboard Of Food Detail*/
    public function food_index(){

        $foods = Food::where('status',1)->with('state','city')->get();
        return view('layouts.frontend.food_detail',compact('foods'));
    }



}
