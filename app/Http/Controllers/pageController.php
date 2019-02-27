<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;

class pageController extends Controller
{
    public function loginpage(){
        return view('login');
    }
    
    public function aboutpage(){
        return view('About');
    }

    public function store(Request $request){
        //dd($request->all());
        

        $task = new task; //object
        
        $this->validate($request,[
            'task'=>'required|max:100|min:5',
        ]);

        $task->task= $request->task; 
        // -->colum Name = $request --> input form name
        $task->save();

        $data = task::all();
        //dd($data);
        return view('Home')->with('tasks',$data);

        //return redirect()->back();
    }

    public function UpdateTaskAsCompleted($id){
        $task =  task::find($id);
        $task-> iscompleted = 1;
        $task->save();
        return redirect()->back(); 
    }
    public function UpdateTaskAsNotCompleted($id){
        $task =  task::find($id);
        $task-> iscompleted = 0;
        $task->save();
        return redirect()->back(); 
    }

    public function deletetask($id){
           $task = task::find($id);
           $task->delete();
           return redirect()->back(); 
    }

    public function  update($id){
        $task = task::find($id);
        return view('update')->with('taskdata',$task);
       
    }

    public function updatetask(Request $request){
        //dd($request);
          $id =$request->id;
          $task=$request->task;
          $data=task::find($id);
          $data->task = $task;
          $data->save();
          $datas = task::all();
          return view('Home')->with('tasks',$datas);


    }
}
