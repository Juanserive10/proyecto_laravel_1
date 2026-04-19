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
        <form action="{{route("books.store")}}" method="post">
            @csrf
            <label for="a1">Ingrese el Titulo del libro</label>
            <input type="text" name="titulo" id="a1">
            <br>
            <label for="a2">Ingrese el Precio del libro</label>
            <input type="text" name="precio" id="a2">
            <button type="submit">Guardar Libro</button>

        </form>
        <h1>Listado de Libros</h1>
        @if (@session("error"))
            {{session("error")}}
        @endif
        <table class = "table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->name}}</td>
                        <td>{{$book->price}}</td>
                        <td>
                            <a href="{{route("books.edit", $book->id)}}" class = "btn btn-warning" >Editar</a>

                            <form action="{{route("books.destroy", $book->id)}}" method="post">
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