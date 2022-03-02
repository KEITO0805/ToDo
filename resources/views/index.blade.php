@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
 　<h1>ToDoリスト</h1>
        <button><a href="/todo/complete">達成済み</a></button>
        <div class='todos'>
         @foreach($tasks as $task)
            <div class='todo'>
               <p>{{$task->task}}</p>
               <p>{{$task->period}}</p>
               <form action="/todos/{{ $task->id }}"  method="post" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class='btn btn-danger'
                    type="submit">削除</button> 
                </form>
               <button class="btn btn-success"><a href="/todos/{{ $task->id }}/edit">編集</a></button>
               <form action="/full/{{ $task->id }}"  method="post" style="display:inline">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-primary">達成！</button> 
                </form>
            </div>
         @endforeach
        </div>
        <button class="btn btn-warning">
            <a href="/todo/create">追加</a>
        </button>　　　　　　　　　  　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
@endsection