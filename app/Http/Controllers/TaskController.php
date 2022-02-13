<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Task $task)
    {
        return view('index')->with(['tasks' => $task->get()]);  
    }
    public function create()
    { 
        return view('create');
    }
    public function store(Request $request, Task $task)
    {
        $input = $request['todo'];
        $input += ['user_id' => 1];
        $input += ['check' => 2];
        $task->fill($input)->save();
        return redirect('/');
    }
}
