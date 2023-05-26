<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{FoodDetail,Food};
use Illuminate\Support\Facades\{Mail,Auth};



class FoodDetailController extends Controller
{
    /*Dashboard Of Food Detail*/
    public function food_index(){
        $food_details = FoodDetail::get();
        $foods = Food::where('status',1)->with('state','city')->get();
        return view('layouts.frontend.food_detail',compact('foods'));
    }

    //Storing Data Of Food Detail
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email'=> 'required'
            ]
        );

        try {
       
           $FoodDetailData = FoodDetail::Create([
               'name' => $request->name,
               'email'=>$request->email,
               'status'=> 1,
            ]);
            
            $response = [
                'status' => true,
                'message' => 'Food Request Send Successfully',
                'icon' => 'success',
            ];
        } catch (\Throwable $e) {
            $response = [
                'status' => false,
                'message' => 'Something Went Wrong! Please Try Again.',
                'icon' => 'error',
            ];
        }
        return response($response);
    }

    // Food Request listing
    public function foodRequest(){
            $food_details = FoodDetail::get();
            return view('pages.request_food',compact('food_details'));
        
    }

    /*Food Request Accept*/
    public function foodAcceptRequest(Request $request){
        try {
            $update['status'] = 2;
            $data= FoodDetail::where('status',$request->id)->first();

            $user['to'] =$data->email;
              Mail::send('pages.food_request_accept_mail',['data' => $data], function ($messages) use ($user) {
                 $messages->to($user['to']);
                 $messages->subject('Accept Food Request');
             });

            $data->update($update);

             
            if(!is_null($data) ){
                $response = [
                    'data'=>$data,
                    'message' => "Send Food Request Successfully.",
                    'status'=>true,
                    'icon' => 'success',

                ];
            }
        }catch (\Throwable $e) {
            dd($e);
            $response = [
                'status' => false,
                'message' => "Something Went Wrong! Please Try Again.",
                'icon' => 'error',
            ];
        }
        return response($response);
    }
}
