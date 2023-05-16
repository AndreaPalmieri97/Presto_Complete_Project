<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
    <div>
        <h1>Un utente ha chiesto di lavorare con noi.</h1>
        <h2>Vorrebbe diventare un revisore. <br> Ecco i suoi dati: </h2>
        <div class="my-3"><b>Nome:</b> {{$user->name}} <br></div>
        <div class="my-3"><b>Email:</b> {{$user->email}} <br></div>
        <div class="my-3"><b>Presentazione:</b> {{$tellMeWhy}} <br></div>
        
        <a class="my-3" href="{{route('make.revisor', compact('user'))}}">Rendi revisore</a>
    </div>

</body>
</html>