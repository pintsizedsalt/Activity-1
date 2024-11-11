<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $user->name }}'s Profile</h1>
    
        <p><strong>Bio:</strong> {{ $user->profile->bio }}</p>
        <p><strong>School:</strong> {{ $user->profile->school }}</p>
</body>
</html>