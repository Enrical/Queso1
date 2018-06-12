<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Movies workout</h1>

    <h2>All the movies</h2>
    
    <ul>
        @foreach($movies as $movie)
            <li>{{ $movie->title }}</li>
        @endforeach
    </ul>

    <h3>movies played today</h3>
    <ul>
        @foreach($movies_played_today as $movie)
            <li>
                {{ $movie->title }}
            </li>
        @endforeach
    </ul>

</body>
</html>