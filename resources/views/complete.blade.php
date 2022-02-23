<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ToDo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
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
   </body>     　
</html>