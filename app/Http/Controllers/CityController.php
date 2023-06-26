<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{State,City};


class CityController extends Controller
{
     /*Dashboard Of City*/
     public function index(){
        $state = State::where('status',1)->get();
        return view('pages.city',compact('state'));
    }

     //Listing Data Of City
     public function listing(){
        $data['city']= City::where('status',1)->with('state')->get();
        $result = [];
        foreach ($data['city'] as $key=>$city) {

                $button = '';
                $button .= '<button class="edit_city btn btn-sm btn-success m-1"  data-id="'.$city['id'].'">
                <i class="mdi mdi-square-edit-outline"></i>
                </button>';

                $button .= '<button class="delete btn btn-sm btn-danger m-1" data-id="'.$city['id'].'">
                <i class="mdi mdi-delete"></i>
                </button>';


                $result[] = array(
                    "0"=>$key+1,
                    "1"=>ucfirst($city->name),
                    "2"=>$city->state->name,
                    "3"=>$button, 
                    );
           
        }
        return response()->json(['data'=>$result]);
    }

     //Storing And Updating Data Of City
     public function store(Request $request)
     {
         $request->validate(
             [
                 'city' => 'required',
                 'state'=> 'required'
             ]
         );

         try {
        
            $CityData = City::updateOrCreate([
                 'id' => $request->id,
             ],[
                'name' => $request->city,
                'state_id'=>$request->state,
             ]);
             
             $response = [
                 'status' => true,
                 'message' => 'City Data '.($request->id ==0 ? 'Added' : 'Updated').' Successfully',
                 'icon' => 'success',
             ];
         } catch (\Throwable $e) {
            dd($e);
             $response = [
                 'status' => false,
                 'message' => 'Something Went Wrong! Please Try Again.',
                 'icon' => 'error',
             ];
         }
         return response($response);
     }

     /*Edit Data Of City*/
     public function edit(Request $request){
        try {
            $data['city'] = City::where('id',$request->id)->first();
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

    //Remove Data Of City
    public function delete(Request $request)
    {
        try {
            $update['status']=0;
            City::where('id',$request->id)->update($update);
            /* JobApplication::where('user_id',$request->id)->update($update);
            JobPost::where('user_id',$request->id)->update($update); */

            $response = [
                'status' => true,
                'message' => "City Data Deleted Successfully",
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

     /*Check Availability Of City*/
     public function validate_city(Request $request){

        if(isset($request) && $request->City){
         $user = City::where('id','!=',$request->id)->where('name',$request->city)->first('name');
         return(!is_null($user))? true :false;
         }else{
            return false;
         }
     }

    /* Get State Wise City Data */
    public function get_city_name(Request $request)
    {
        if(isset(($request)) && !is_null($request->state_id)){
            $data = City::where("state_id",$request->state_id)->where('status',1)->get(["name", "id"]);
             return response()->json($data);
        }else{
            return false;
        }
        
    }
}
