<?php
Log::error('ijichi');
 ?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>create</title>
    </head>
    <body>
        <h1>新規作成</h1>
        @if($errors->any())
            @foreach($errors->all() as $message)
                <strong>{{ $message }}</strong>
            @endforeach
        @endif
        <form class="" action="{{ route('todos.create') }}" method="post">
            @csrf
            <p>title</p>
            <input type="text" name="title"><br>
            <p>detail</p>
            <textarea name="detail" rows="8" cols="80"></textarea><br>
            <button type="submit" name="button">送信</button>
            <a href="{{ url('/') }}">戻る</a>
        </form>
    </body>
</html>
