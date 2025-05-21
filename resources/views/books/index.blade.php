<!DOCTYPE html>
<html>
<head>
    <title>Daftar Books</title>
</head>
<body>
    <h1>Daftar Books</h1>
    <ul>
        @foreach($books as $book)
            <li>
                {{ $book->id }} - {{ $book->title }} 
                | Penulis: {{ $book->author->name ?? 'N/A' }}
            </li>
        @endforeach
    </ul>
</body>
</html>
