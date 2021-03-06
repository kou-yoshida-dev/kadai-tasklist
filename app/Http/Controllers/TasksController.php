<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

use Auth;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::orderBy('id','desc')->paginate(25);
        $users=\App\User::all();
        return view('tasks.index',['tasks'=>$tasks,'users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $task = new Task;
        return view('tasks.create',['task'=>$task]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $request->validate(['content' => 'required|max:255','status'=>'required|max:10']);
        
        $task = new Task;
       
        $task->status = $request->status;
        $task->content = $request->content;
        $task->user_id=Auth::user()->id;
        $task->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
        $task=Task::findOrfail($id);
        
        if($task->user_id==Auth::user()->id){
            return view('tasks.show',['task'=>$task]);
        }else{
            return redirect('/');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::findOrfail($id);
        if($task->user_id==Auth::user()->id){
            return view('tasks.edit',['task'=>$task]);
        }
        return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(['content'=>'required|max:255','status'=>'required|max:10']);
        
        
        $task = Task::findOrfail($id);
        
        if($task->user_id==Auth::user()->id){
            $task->content = $request->content;
            $task->status = $request->status;
            $task->save();
            return redirect('/');
            
        }else{
            return redirect('/');
        }
        
        
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrfail($id);
        if($task->user_id==Auth::user()->id){
            $task->delete();
        return redirect('/');
        }else{
            return redirect('/');
        }
    }
}
