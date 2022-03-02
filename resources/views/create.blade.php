@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
 　<h1>追加</h1>
        <form action="/todo" method="POST">
            @csrf
            <div class="todo">
                <h2>ToDo</h2>
                <input type="text" name="todo[task]" />
                <h2>期限</h2>
                <input type="date" name="todo[period]" />
            </div>
            <input type="submit" value="保存"/>
        </form>
        <button><a href="/">戻る</a></button>　　　　　　　　　　  　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
@endsection