<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Listado de Ciudades</title>
</head>
<body>
    
<div class="container mt-4">
    <h1 class="text-center">Genres Table</h1>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre del Género</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se mostrarán los datos de la tabla genres -->
            @foreach($genres as $genre)
            <tr>
                <td>{{ $genre->id }}</td>
                <td>{{ $genre->genre_name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

</body>
</html>
