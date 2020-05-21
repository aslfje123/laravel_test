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
    <form action="/home/retrieve" method="post">
        <p>To retrieve</p>
        <p>ID: <input type="text" name="id" value=""></p>
        {{csrf_field()}}
        <input type="submit" value="submit">
    </form>
    <form action="welcome" method="get">
        <input type="submit" value="back">
    </form>
</body>
</html>