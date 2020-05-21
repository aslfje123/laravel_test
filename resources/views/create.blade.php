<!DOCTYPE html>
<html>
<head>
<meta charaset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chorme=1">
<title>form</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" ref="stylesheet">
</head>
<body>
    <form action="/home/create" method="post">
        <p>Username: <input type="text" name="username" value=""></p>
        <p>Password: <input type="text" name="password" value=""></p>
        <p>Todo:     <input type="text" name="todo" value=""></p>
        {{csrf_field()}}
        <input type="submit" value="submit">
    </form>
    <form action="welcome" method="get">
        <input type="submit" value="back">
    </form>
</body>
</html>