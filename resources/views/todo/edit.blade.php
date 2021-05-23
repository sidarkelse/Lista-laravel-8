<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Editar Lista</title>
</head>
<body style="text-align:center">
    <H1>Edite sua  lista</H1>

    <h3>
        <x-alert />
    </h3>
    <form action="/update" method="post">
        @csrf
        @method('patch')
    <input type="text" name="title"  value="{{$todo->title}}"/>    
    <input style="display:none" type="number" name="id" value="{{$todo->id}}">
    <input type="submit" value="Editar" />
    
    </form>
    <br>
    <a href="/index">Voltar</a>
</body>
</html>