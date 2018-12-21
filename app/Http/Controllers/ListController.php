<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo_index;
use App\User;
use App\Todo_content;
class ListController extends Controller
{   
    function ListController()
    {

    } 

    //For request
    Public function Get_list()
    {   
        // $User=new User();
        // $Result=$User::find(1)->todo;

        // $Data=[
        //     'Posts_data'=> $Result,
        //     'Num_of_post'=>$Result->count()
        // ];

        return view('todo');
    }


    //For API
    public Function Add_Todo(Request $Data)
    {   
        $User_info=new User();
        $index=new Todo_index();
        $index->todo_name='Forsa';
        if($index->user()->associate($User_info::find(1))->save())
        {
            return array('Status'=>True,'Message'=>'Created New Todo');
            //return ['posts' => $items,'comment' => $cmnt];
        }
        else 
        {
            return array('Status'=>False,'Message'=>'There Is An Error In Server');
        }
    }   
    public function Add_task_todo(Request $Data)
    {
        $User_info=new User();
        $index=new Todo_index();
        $Todo=new Todo_content();
        
        // $Todo->content=$Data->Todo_item;
        // $Todo->finished=0;

    }


        public function Update_Todo(Request $Data)
        {  
            $Todo=new Todo();
            $Todo=$Todo::find($Data->Position);

            if($Todo->finished === 1)
            {
                $Todo->finished=0;
            }
            else if($Todo->finished === 0)
            {
                $Todo->finished=1;
            }
            
            if($Todo->Save())
            {
                return ['Status'=>True,'Message'=>'Todo Updated'];
                
            }else
            {   
                return ['Status'=>False,'Message'=>'There Is An Error In Server'];
            }

        }
    
        public function Delete_Todo(Request $Data)
        {  
            if(App\Flight::destroy($Data->position))
            {
                return ['Status'=>True,'Message'=>'Todo Deleted'];
            }
            else
            {
                return ['Status'=>False,'Message'=>'There Is An Error In Server'];
            }
            

        }
    
    
    
}
