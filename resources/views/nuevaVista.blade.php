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
        <h1>Listado de Autores ordenado ascendentemente por su nombre</h1>
        <table class = "table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                    <tr>
                        <td>{{$author->id}}</td>
                        <td>{{$author->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
</body>
</html>