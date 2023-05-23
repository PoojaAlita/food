<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{State};


class StateController extends Controller
{
    /*Dashboard Of State*/
    public function index(){
        return view('pages.state');
    }

     //Listing Data Of State
     public function listing(){
        $data['state']= State::where('status',1)->get();
        $result = [];
        foreach ($data['state'] as $key=>$state) {

                $button = '';
                $button .= '<button class="edit_state btn btn-sm btn-success m-1"  data-id="'.$state['id'].'">
                <i class="mdi mdi-square-edit-outline"></i>
                </button>';

                $button .= '<button class="delete btn btn-sm btn-danger m-1" data-id="'.$state['id'].'">
                <i class="mdi mdi-delete"></i>
                </button>';


                $result[] = array(
                    "0"=>$key+1,
                    "1"=>ucfirst($state->name),
                    "2"=>$button, 
                    );
           
        }
        return response()->json(['data'=>$result]);
    }

     //Storing And Updating Data Of State
     public function store(Request $request)
     {
         $request->validate(
             [
                 'state' => 'required',
             ]
         );

         try {
        
            $stateData = State::updateOrCreate([
                 'id' => $request->id,
             ],[
                'name' => $request->state,
             ]);
             
             $response = [
                 'status' => true,
                 'message' => 'State Data '.($request->id ==0 ? 'Added' : 'Updated').' Successfully',
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

     /*Edit Data Of State*/
     public function edit(Request $request){
        try {
            $data['state'] = State::where('id',$request->id)->first();
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

    //Remove Data Of State
    public function delete(Request $request)
    {
        try {
            $update['status']=0;
            State::where('id',$request->id)->update($update);
            /* JobApplication::where('user_id',$request->id)->update($update);
            JobPost::where('user_id',$request->id)->update($update); */

            $response = [
                'status' => true,
                'message' => "State Data Deleted Successfully",
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

     /*Check Availability Of State*/
     public function validate_state(Request $request){

        if(isset($request) && $request->state){
         $user = State::where('id','!=',$request->id)->where('name',$request->state)->first('name');
         return(!is_null($user))? true :false;
         }else{
            return false;
         }
     }


}
