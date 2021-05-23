 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <title>Lista </title>
 </head>
 <body>
     <h1>Lista</h1>
     <a href="/create">Criar</a>
    <h3>
        <x-alert/>
    </h3>
 @foreach ($todos as $todo)
 <li>
     @if($todo->completed)
     
     
        <span style="text-decoration:line-through"> {{$todo->title}}</span>
        @else 
        {{$todo->title}}
        @endif
   
    <a href="{{asset('/'. $todo->id . '/edit')}}">Editar</a>
    <a href="{{asset('/'. $todo->id . '/completed')}}">Completo</a>
    <a href="{{asset('/'. $todo->id . '/delete')}}">Deletar</a>
 </li>
     
 @endforeach
    </body>
 </html>