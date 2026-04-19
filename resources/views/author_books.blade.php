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
        <form action="{{route("author_books.store")}}" method="post">
            @csrf
            <select name="author" id="">
                @foreach($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}}</option>
                @endforeach
            </select>
            <br>
            <select name="book" id="">
                @foreach($books as $book)
                    <option value="{{$book->id}}">{{$book->name}}</option>
                @endforeach
            </select>
            <br>
            <button type="submit">Guardar</button>
        </form>
        <h1>Listado de Libros_autores</h1>
        <table class = "table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre Autor</th>
                    <th>Nombre Libro</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($author_books as $author_book)
                    <tr>
                        <td>{{$author_book->id}}</td>
                        <td>{{$author_book->author->name}}</td>
                        <td>{{$author_book->book->name}}</td>
                        <td>
                            <a href="{{route("author_books.edit", $author_book->id)}}" class = "btn btn-warning" >Editar</a>

                            <form action="{{route("author_books.destroy", $author_book->id)}}" method="post">
                                @csrf
                                @method("delete")
                                <button type="submit" class = "btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
</body>
</html>