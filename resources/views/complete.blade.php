@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        @if(Session::has('message'))
        メッセージ：{{ session('message') }}
        @endif
        <h1>ToDoリスト</h1>
        <div class='todos'>
         @foreach($tasks as $task)
            <div class='todo'>
               <p>{{$task->task}}</p>
               <p>{{$task->period}}</p>
               <form action="/todos/{{ $task->id }}"  method="post" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">削除</button> 
                </form>
               <button><a href="/todos/{{ $task->id }}/edit">編集</a></button>
            </div>
         @endforeach
        </div>
        <button><a href="/">戻る</a></button>
@endsection