<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Orm</title>
</head>
<body>
    @foreach ($cars as $item)
        <section>
            <h2>{{ $item["marca"] }}</h2>
            <h3>{{ $item["modello"] }}</h3>
            <h4>{{ $item["targa"] }}</h4>
        </section>
        <hr>
    @endforeach
</body>
</html>