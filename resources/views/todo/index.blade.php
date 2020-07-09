<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<a href="{{route('todo.create')}}">Create form</a>
@foreach ($todos as $todo)
    <p>title : {{ $todo->title }}</p> <p> description : {{ $todo -> description}}</p><br> 
    <a href={{route('todo.update',['todo' => $todo->id])}}>update</a>
@endforeach
</body>
</html>