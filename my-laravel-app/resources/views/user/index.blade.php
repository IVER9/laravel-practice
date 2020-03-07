<?php var_dump($users) ?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>USERLIST</h1>
        <ul>
            @foreach($users as $user)
            <li>$user</li>
            @endforeach
        </ul>
    </body>
</html>
