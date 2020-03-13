<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>todos</title>
    </head>
    <body>
        <h1>TODOLIST</h1>
        <table border="3">
            <tr>
                <th>id</th>
                <th>title</th>
                <th>status</th>
                <th>created_at</th>
                <th>-</th>
            </tr>
            @foreach($todos as $todo)
                <tr>
                    <td>
                        {{ $todo['id'] }}
                    </td>
                    <td>
                        {{ $todo['title'] }}
                    </td>
                    <td>
                        @if($todo['status'] === 0)
                            未完了
                        @endif
                        @if($todo['status'] === 1)
                            完了
                        @endif
                    </td>
                    <td>
                        {{ $todo['created_at'] }}
                    </td>
                    <td>
                        <input type="submit" name="delete" value="削除">
                    </td>
                </tr>
            @endforeach
        </table><br>
        <a href="{{ route('todos.create') }}">新規作成</a>
    </body>
</html>
