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
    //For API
    public Function Get_all()
    {
        $user=new User();
        $index=new Todo_index();
        return $user::find(1)->index;
    }
    public Function Get_Todo($id)
    {   
        $index=new Todo_index();
        if($index::find($id))
        {
            return response(['Status'=>True,'Message'=>'Created New Todo'],200);
        }
        else
        {
            return response(['Status'=>False,'Message'=>'There Is An Error In Server'],500);
        }
    }
    public Function Add_Todo(Request $Data)
    {   
        if(isset($Data->Todo_Name))
        {
            $User_info=new User();
            $index=new Todo_index();
            $index->todo_name=$Data->Todo_Name;
            if($index->user()->associate($User_info::find(1))->save())
            {
                return response(['Status'=>True,'Message'=>'Created New Todo'],200);
            }
            else 
            {
                return response(['Status'=>False,'Message'=>'There Is An Error In Server'],500);
            }
        }else
        {
            return response(['Status'=>True,'Message'=>'Missing Field'],405);
        }
    }   
    
    public function Update_Todo(Request $Data,$id)
    {   
        if($Data->input('Todo_update_name') != null)
        {   
            $index=new Todo_index();
            $index=$index::find($id);
            if($index){
                $index->todo_name = $Data->input('Todo_update_name');
                if($index->Save())
                {   
                    return response(['Status'=>True,'Message'=>'Todo Name Updated'],200);
                }else
                {   
                    return response(['Status'=>True,'Message'=>'Fail To Save Todo Name'],500);
                }
            }
            else
            {
                return response(['Status'=>False,'Message'=>'Todo Not Exist'],400);
            }
        }
        else
        {
             return response(['Status'=>False,'Message'=>'Missing Field'],405);
        }
    }
    
    public function Delete_Todo($id)
    {  
        $index=new Todo_index();
        $index=$index::find($id);

        if($index){
            if($index->delete())
            {
                return response(['Status'=>True,'Message'=>'Todo Deleted'],200);
            }
            else
            {
                return response(['Status'=>False,'Message'=>'There Is An Error In Server'],505);
            }
        }
        else
        {   
            return response(['Status'=>False,'Message'=>'Todo Not Exist'],400);
        }
    }
    
        //Task
        public function Add_task_todo(Request $Data,$todo_id)
        {   
            $User_info=new User();
            $index=new Todo_index();
            $Todo=new Todo_content();

            //https://stackoverflow.com/questions/27783111/laravel-eloquent-with-not-identifying-variables
            $confirm_index=$index::where(function ($query) use($todo_id) {
                $query->where('todo_owner', '=', 1)
                      ->Where('id', '=', $todo_id);
            })->inRandomOrder()->get();


            if($confirm_index)
            {   
                if($Data->task !=null)
                {
                    $Todo->task=$Data->task;
                    $Todo->finished=0;
                    $save_result=$Todo->index()->associate($confirm_index[0])->save();
                    if($save_result)
                    {
                        return response(['Status'=>True,'Message'=>'Added Task To Todo'],200);
                    }
                }
                else
                {
                    return response(['Status'=>False,'Message'=>'Missing Field'],405);
                }
   

            }
            else
            {return response(['Status'=>False,'Message'=>'Todo Not Exist'], 400);} 
            // return $first[0];
            // return $User_info::find()->index;
            // return $first;
            //return $User_info::find(1)->index;
                // $Todo->content=$Data->Todo_item;
                // $Todo->finished=0;
        }
        public function Get_all_task_todo(Request $Data,$todo_id)
        {   
            $index=new Todo_index();
            $Todo=new Todo_content();
            if($index::find($todo_id)){

                $result=$Todo::where( function ($query) use($todo_id) {
                    $query->where('todo_id', '=', $todo_id)
                          ->Where('deleted_at', '=', null);
                })->get();

                return response(['Status'=>True,'Message'=>$result],200);
            }
            else
            { return response(['Status'=>False,'Message'=>'Todo Not Exist'], 400);
                //https://laravel.com/docs/5.7/responses
            }
        }  
        public function Delete_task_todo(Request $Data,$todo_id){

            $index=new Todo_index();
            $Todo=new Todo_content();

            if($Data->task_id != null ){

                if($index::find($todo_id)){
                    $result=$Todo::where( function ($query) use($Data,$todo_id) {
                        $query->where('todo_id', '=', $todo_id)
                            ->Where('deleted_at', '=', null)
                            ->where('id','=',$Data->task_id);
                    });

                    if($result->get())
                    {
                        if($result->delete())
                        {
                            return response(['Status'=>True,'Message'=>'delete sucessfull'],200);
                        }
                        else{

                            return response(['Status'=>False,'Message'=>'There Is An Error In Server'],505);
                        }
                    }
                    else
                    {
                        return response(['Status'=>False,'Message'=>'Task Not Exist'], 400);
                    }

                    
                }
                else
                { return response(['Status'=>False,'Message'=>'Todo Not Exist'], 400);}
                
            }
            else{
                return response(['Status'=>False,'Message'=>'Missing Field'],405);
            }
        }
        
    
}
