<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Todo Application</h1>
    <form action="{{route('saveTodo')}}" method ="POST">
        @csrf
        <input type="text" name="todo" placeholders="Enter todo here">
        <input type="submit" value='add'>  
    </form>
<div>
    <u1>
        @foreach($list as $todo)
            <li>{{$todo->title}}</li>
        @endforeach
    </u1>
</div>

</body>
</html>