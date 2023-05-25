<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Food,State,City};


class FoodController extends Controller
{
     /*Dashboard Of Food*/
     public function index(){
        $data['state'] = State::where('status',1)->get();
        $data['city'] = City::where('status',1)->get();

        return view('pages.food',compact('data'));
    }

     //Listing Data Of Food
     public function listing(){
        $data['Food']= Food::where('status',1)->with('state','city')->get();
        $result = [];
        foreach ($data['Food'] as $key=>$Food) {

                $button = '';
                $request = '';
             /*    $button .= '<button class="edit_food btn btn-sm btn-success m-1"  data-id="'.$Food['id'].'">
                <i class="mdi mdi-square-edit-outline"></i>
                </button>'; */

                $button .= '<button class="delete btn btn-sm btn-danger m-1" data-id="'.$Food['id'].'">
                <i class="mdi mdi-delete"></i>
                </button>';

                // $foodStatus = $Food->food_status == 0 ? 'Pending' : ($food->food_status == 2 ? 'Accept' : 'Request');

                // $request .= '<a href="">' . $foodStatus . '</a>';
                $result[] = array(
                    "0"=>$key+1,
                    "1"=>ucfirst($Food->food_item),
                    "2"=>$Food->description,
                    "3"=>date('m-d-Y', strtotime($Food->pickup_date)),
                    "4"=>$Food->pickup_address,
                    "5"=>$Food->state->name,
                    "6"=>$Food->city->name,
                    "7"=>$Food->contact_person,
                    "8"=>$Food->contact_person_mobile_number,
                    // "9"=>$request,
                    "9"=>$button
                    );


        }
        return response()->json(['data'=>$result]);
    }

     //Storing And Updating Data Of Food
     public function store(Request $request)
     {

         try {

            $foods = implode(',',$request->add_food).','.$request->food;
            $FoodData = Food::updateOrCreate([
                 'id' => $request->id,
             ],[
                'food_item' => $foods,
                'description'=>$request->description,
                'pickup_date'=>$request->pickup_date,
                'pickup_address'=>$request->pickup_address,
                'state_id'=>$request->state,
                'city_id'=>$request->city,
                'contact_person'=>$request->contact_person_name,
                'contact_person_mobile_number'=>$request->contact_person_mobile_number,
             ]);

             $response = [
                 'status' => true,
                 'message' => 'Food Data '.($request->id ==0 ? 'Added' : 'Updated').' Successfully',
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

     /*Edit Data Of Food*/
     public function edit(Request $request){
        try {
            $data['Food'] = Food::where('id',$request->id)->first();
            if(!is_null($data) ){
                $response = [
                    'data'=>$data,
                    'status'=>true,
                ];
            }
        }catch (\Throwable $e) {
            $response = [
                'status' => false,
                'message' => "Something Went Wrong! Please Try Again.",
                'icon' => 'error',
            ];
        }
        return response($response);

     }

    //Remove Data Of Food
    public function delete(Request $request)
    {
        try {
            $update['status']=0;
            Food::where('id',$request->id)->update($update);


            $response = [
                'status' => true,
                'message' => "Food Data Deleted Successfully",
                'icon' => 'success',
            ];
        }catch (\Throwable $e) {
            $response = [
                'status' => false,
                'message' => "Something Went Wrong! Please Try Again.",
                'icon' => 'error',
            ];
        }
        return response($response);
    }


      /* Food Listing */
      public function food_listing(){
        $food = Food::where('status',1)->with('state','city')->get();
        return view('pages.admin_listing_food',compact('food'));
      }






}
