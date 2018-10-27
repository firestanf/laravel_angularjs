<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\User;
class ListController extends Controller
{   
    function ListController()
    {

    } 

    //For request
    Public function Get_list()
    {   
        $User=new User();
        $Result=$User::find(1)->todo;

        $Data=[
            'Posts_data'=> $Result,
            'Num_of_post'=>$Result->count()
        ];

        return view('list')->with($Data);
    }


    //For API
    public Function Add_Todo(Request $Data)
    {   
        $User_info=new User();
        $Todo=new Todo();

        $Todo->content=$Data->Todo_item;

        if($Todo->user()->associate($User_info::find(1))->save())
        {
            return $Response_array=array('Status'=>True,'Message'=>'Created New Todo');
            //return ['posts' => $items,'comment' => $cmnt];
        }
        else 
        {
            return $Response_array=array('Status'=>False,'Message'=>'There Is An Error In Server');
        }
    }
        public function Update_Todo(Request $Data)
        {
            $Todo=new Todo();
            return $Todo::find($Data->Position)->get();
        }
    
    
}
