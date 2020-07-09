<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form </title>
</head>
<body>
<form action="{{route('todo.store')}}" method="post">
@csrf
  <div><label>title :</label><input type="text" name="title"></div>
  <div><label>description :</label><input type="text" name="description"></div>
  <div><button type="submit">Add </button></div>
</form>
</body>
</html>