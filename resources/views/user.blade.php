<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Users Here</h1>

    @foreach ($users as $user)
        <div>Name: {{ $user->name }}</div>
        <div>Email: {{ $user->email }} </div>
    @endforeach
</body>
</html>