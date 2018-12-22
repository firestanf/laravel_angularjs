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
    
        //Task
        public function Add_task_todo(Request $Data)
        {
            $User_info=new User();
            $index=new Todo_index();
            $Todo=new Todo_content();
            
            $first=$index::where(function ($query) {
                $query->where('todo_owner', '=', 1)
                      ->Where('id', '=', 1);
            })->inRandomOrder()->get();
            
            $Todo->task="asd";
            $Todo->finished=0;
            $Todo->index()->associate($first[0])->save();
            
            return $first[0];
            // return $User_info::find()->index;
            // return $first;
            //return $User_info::find(1)->index;
                // $Todo->content=$Data->Todo_item;
                // $Todo->finished=0;
    
        }
        public function Get_task_todo(Request $Data)
        {
            $index=new Todo_index();
            $Todo=new Todo_content();
            if($index::find(12)->exists() != null){
                return $Todo::where('todo_id', '=', 1)->get();
            }
            else
            {
                return 'qwd';
            }// echo $first;
        }
    
    
}
