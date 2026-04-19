<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="{{route("author_books.update", $author_book->id)}}" method="post">
            @csrf
            @method("put")
            <select name="author" id="">
                @foreach($authors as $author)
                    <option value="{{$author->id}}" {{$author->id == $author_book->id_author ? 'selected' : ''}}>
                        {{$author->name}}
                    </option>
                @endforeach
            </select>
            <br>
            <select name="book" id="">
                @foreach($books as $book)
                    <option value="{{$book->id}}" {{$book->id == $author_book->id_book ? 'selected' : ''}}> 
                        {{$book->name}}
                    </option>
                @endforeach
            </select>
            <br>
            <button type="submit">Guardar</button>
        </form>
    </div> 
</body>
</html>