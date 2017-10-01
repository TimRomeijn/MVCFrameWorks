<!DOCTYPE html>

<html>

<head>

    <title>Artists</title>
</head>

<body>

<h1>Browse artists:</h1>

<ul>
    @foreach($artists as $artist)

        <li>{{$artist->artistname}}</li>

        <img src="{{$artist->artistimage}}">

    @endforeach
</ul>

</body>

</html>