<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Movies Workout</h1>

    <h2>All the movies</h2>
 
 <ul>
     @foreach($movies as $movie)
         <li>{{ $movie->title }}</li>
     @endforeach
 </ul>

    <h2>Events tonight in Prague</h2>
    <ul>
     @foreach($movies as $movie)
         <li>
            {{ $event->begins_at }} -
            {{ $event->name }}
         </li>
     @endforeach
 </ul>

  <h2>Movies Played Today in Cinema/h2>
    <ul>
     @foreach($movies as $movie)
         <li>
            {{ $event->begins_at }} -
            {{ $event->name }}
         </li>
     @endforeach
 </ul>

</body>
</html>