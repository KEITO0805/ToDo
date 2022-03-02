<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Task $task)
    {
        $notcomplete = $task->where('check',1)->get();
        return view('index')->with(['tasks' => $notcomplete]);  
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
    public function edit(Task $task)
    {
        return view('edit')->with(['task' => $task]);
    }
    public function update(Request $request, Task $task)
    {
        $input = $request['todo'];
        $input += ['user_id' => 1];
        $input += ['check' => 2];
        $task->fill($input)->save();
        return redirect('/');
    }
    public function delete(Task $task)
    {
        $task->delete();
        return redirect('/');
    }
    public function complete(Task $task)
    {
        $complete = $task->where('check',2)->get();
        return view('complete')->with(['tasks' => $complete]);  
    }
    public function full(Task $task)
    {
        $input = [];
        $tasks = new Task;
        $input += ['period' => $task->period];
        $input += ['task' => $task->task];
        $input += ['user_id' => $task->user_id];
        $input += ['check' => 2];
        $tasks->fill($input)->save();
        return redirect('/todo/complete')->with('message','タスクを達成しました！！');
    }
}