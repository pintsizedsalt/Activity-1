<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $user->name }}'s Courses</h1>
    <ul>
        @foreach($user->courses as $course)
            <li>{{ $course->name }}</li>
        @endforeach
    </ul>
</body>
</html>