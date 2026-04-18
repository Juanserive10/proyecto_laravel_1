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
        <form action="{{route("authors.store")}}" method="post">
            @csrf
            <label for="a1">Ingrese Nombre del autor</label>
            <input type="text" name="nombre" id="a1">
            <br>
            <button type="submit">Guardar Autor</button>

        </form>
        <h1>Listado de Libros</h1>
        <table class = "table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                    <tr>
                        <td>{{$author->id}}</td>
                        <td>{{$author->name}}</td>
                        <td>
                            <a href="{{route("authors.edit", $author->id)}}" class = "btn btn-warning" >Editar</a>

                            <form action="{{route("authors.destroy", $author->id)}}" method="post">
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