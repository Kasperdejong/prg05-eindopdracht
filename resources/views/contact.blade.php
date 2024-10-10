<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <h1>{{$info}}</h1>
        <p>jouw leukste nummertje is: {{$id}}</p>
        <a href={{route('product', ['name' => 'cheese'])}}>Ga naar product pagina</a>
    </section>
</body>
</html>
