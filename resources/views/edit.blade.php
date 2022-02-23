<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ToDo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
    <h1 class="title">編集</h1>
    <div class="content">
        <form action="/todos/{{ $task->id }}" method="POST">
            @csrf
            @method('PUT')
           <div class="todo">
                <h2>ToDo</h2>
                <input type="text" name="todo[task]" value="{{ $task->task }}"/>
                <h2>期限</h2>
                <input type="date" name="todo[period]" value="{{ $task->period }}"/>
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
    <button><a href="/">戻る</a></button>
    </body>
</html>