<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tasklist;

class TaskController extends Controller
{
    //show all tasks
    public function index(){
        $tasks = tasklist::all();

        return view('tasks.index',compact('tasks'));
    }

    //add a task page
    public function create(){
        return view('tasks.create');
    }

    //store a task
    public function store(Request $request){
        $request->validate([
            'title' =>'required',
        ]);
        $task = new tasklist;
        $task->title = $request->title;
        $task->save();

        return redirect()->route('tasklist.index');
    }

    //delete a task
    public function destroy($id){
        $task = tasklist::find($id);
        $task->delete();

        return redirect()->route('tasklist.index');
    }

    //complete a task
    public function complete($id){
        $task = tasklist::find($id);
        $task->is_completed = 1;
        $task->save();

        return redirect()->route('tasklist.index');
    }
}
