<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List - Laravel</title>
</head>
<body>
    
    <form action="{{ url('/') }}" method="post">
        @csrf
        <input type="text" name="task" id="task">
        <input type="submit" value="Add task">
    </form>

</body>
</html>