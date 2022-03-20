<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Trains</title>
</head>

<body>
    <h1>Trains</h1>
    @foreach($trains as $train)
    <h3>Treno: {{ $train->num_train }}</h3>
    <ul>
        <li>Compagnia: {{ $train->company }}</li>
        <li>N° carrozze: {{ $train->carriages }}</li>
    </ul>
    @endforeach
</body>

</html>