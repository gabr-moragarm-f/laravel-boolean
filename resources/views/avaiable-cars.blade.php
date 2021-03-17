<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
  <h1>AVAIABLE CARS</h1>

  <ol>
    @foreach ($cars as $key => $car)
      <li>
        <h2>{{strtoupper($car->marca)}}  {{strtoupper($car->modello)}}</h2>

        <p>Matricola: {{$car->matricola}}</p>
      </li>
    @endforeach
  </ol>
</body>
</html>
