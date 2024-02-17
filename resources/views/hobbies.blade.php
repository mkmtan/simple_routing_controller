<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobbies</title>
</head>
<body>
    <h1>Hobbies Page</h1>

    <p>This is some content about my hobbies.</p>

    <a href="{{ route('aboutMe') }}">About Me Button</a>
    <a href="{{ route('skills') }}">Skills Button</a>
    <a href="{{ route('hobbies') }}">Hobbies Button</a>
    
    @include('partials.footer')
</body>
</html>