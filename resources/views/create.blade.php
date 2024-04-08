<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
<body> 

    <h1>Adauga carte</h1> 
    <div> 
        <form action="{{ route('books.store') }}" method="post">
            @csrf
            <div>
                <label for="title">Titlu:</label>
                <input type="text" id="title" name="title" placeholder="Titlu">
            </div>
            <div>
                <label for="author">Autor:</label>
                <input type="text" id="author" name="author" placeholder="Autor">
            </div>
            <div>
                <label for="year">Anul publicării:</label>
                <input type="number" id="year" name="year" placeholder="Anul publicării">
            </div>
            <div>
                <label for="description">Descriere:</label>
                <input type="text" id="description" name="description" placeholder="Descriere">
            </div>
            <button type="submit">Save</button>
        </form>
    </div> 

</body>
</html>