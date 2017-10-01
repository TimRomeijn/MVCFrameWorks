<!DOCTYPE html>

<html>

<head>

    <title>Home</title>
</head>

<body>

    <h1>Welcome to TattooYou</h1>

    <a href="">Artists</a>

    <h2>Popular artists</h2>

    <p> Three featured artists </p>

    <ul>
        @foreach($artists as $artist)

            <li>{{$artist->artistname}}</li>

            <img src="{{$artist->artistimage}}">

        @endforeach
    </ul>




</body>

</html>