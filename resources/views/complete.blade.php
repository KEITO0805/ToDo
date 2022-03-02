@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        @if(Session::has('message'))
        メッセージ：{{ session('message') }}
        <div class="alert alert-primary" role="alert">
  　     タスクを達成しました！！！おめでとうございます！！！
　　　　</div>
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
                    <button type="submit" class="btn btn-danger">削除</button> 
                </form>
               <button class="btn btn-success"><a href="/todos/{{ $task->id }}/edit">編集</a></button>
            </div>
         @endforeach
        </div>
        <button class="btn btn-outline-primary"><a href="/">戻る</a></button>
@endsection