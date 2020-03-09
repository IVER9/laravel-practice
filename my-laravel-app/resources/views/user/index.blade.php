<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>USERLIST</h1>
        <table border="3">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>
                        {{ $user['id'] }}
                    </td>
                    <td>
                        {{ $user['name'] }}
                    </td>
                    <td>
                        {{ $user['email'] }}
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
