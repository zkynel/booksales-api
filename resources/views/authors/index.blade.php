<!DOCTYPE html>
<html>
<head>
    <title>Data Authors</title>
</head>
<body>
    <h1>Daftar Authors</h1>
    <ul>
        @foreach($authors as $author)
            <li>{{ $author->id }} - {{ $author->name }}</li>
        @endforeach
    </ul>
</body>
</html>
