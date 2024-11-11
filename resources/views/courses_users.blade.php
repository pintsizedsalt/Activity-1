<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Users in {{ $course->name }}</h1>
    <ul>
        @foreach($course->users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</body>
</html>