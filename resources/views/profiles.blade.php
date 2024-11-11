<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Profiles</h1>
    <ul>
        @foreach($profiles as $profile)
            <li>
                <strong>{{ $profile->user->name }}</strong> <br>
                <strong>Bio:</strong> {{ $profile->bio }} <br>
                <strong>School:</strong> {{ $profile->school }}
            </li>
        @endforeach
    </ul>
</body>
</html>