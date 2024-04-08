 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista cărților</title>
</head>
<body>

<h1>Lista cărților</h1>

<?php 
if(isset($_GET['query'])) { 

    // $searchTerm = $_GET['query'];

    // $books = DB::table('books')
    // ->join('authors', 'books.author', '=', 'authors.id')
    // ->select('books.*', 'authors.name as author_name')
    // ->where('books.title', 'like', '%' . $searchTerm . '%')
    // ->orWhere('authors.name', 'like', '%' . $searchTerm . '%')
    // ->get();

    // echo "Rezultatele căutării pentru: " . $searchTerm;
} 
?>
    <form method="GET">
        <input type="text" name="query" placeholder="Caută...">
        <button type="submit">Caută</button>
    </form><br>
     

<table style="border-collapse: collapse; width: 100%;">
    <thead>
        <tr>
            <th style="border: 1px solid #000; padding: 8px;">#</th>
            <th style="border: 1px solid #000; padding: 8px;">Titlu</th>
            <th style="border: 1px solid #000; padding: 8px;">Autor</th>
            <th style="border: 1px solid #000; padding: 8px;">Anul publicării</th>
            <th style="border: 1px solid #000; padding: 8px;">Descriere</th>
        </tr>
    </thead>
    <tbody>
        @forelse($books as $book)
            <tr>
                <td style="border: 1px solid #000; padding: 8px;">{{ $loop->iteration }}</td>
                <td style="border: 1px solid #000; padding: 8px;">{{ $book->title }}</td>
                <td style="border: 1px solid #000; padding: 8px;">{{ $book->author }}</td>
                <td style="border: 1px solid #000; padding: 8px;">{{ $book->year }}</td>
                <td style="border: 1px solid #000; padding: 8px;">{{ $book->description }}</td>
            </tr>
        @empty
            <tr>
                <td>No data</td>
            </tr>
        @endforelse
    </tbody>
</table>

<a href="{{ route('books.create') }}">Adauga</a>

</body>
</html>