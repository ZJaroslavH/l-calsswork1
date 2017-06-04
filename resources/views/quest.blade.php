<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quest</title>
</head>
<body>
<h1>{{$room["title"]}}</h1>
<p>
    {{$room["description"]}}
</p>
@foreach($room["action"] as  $key=>$value)
    <a href="non" onclick="this.href='{{$value}}'">{{$key}}</a>
    <br>
@endforeach

</body>
</html>  