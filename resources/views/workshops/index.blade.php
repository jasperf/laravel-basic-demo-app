<!DOCTYPE html>
<html>
<head>
 <title>Laravel</title>
</head>
<body>
 <ul>
 @foreach ($workshops as $workshop)
 <li>{{$workshop->body}}</li>
 @endforeach
 </ul>
</body>
</html>