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
    <h1 class="text-center">Artists Table</h1>
    <table class="table table-striped table-bordered">
    <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre del Artista</th>

            </tr>
        </thead>
        <tbody>
            <!-- Aquí se mostrarán los datos de la tabla albums -->
            @foreach($artists as $artist)
            <tr>
                <td>{{ $artist->id }}</td>
                <td>{{ $artist->artist_name }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>

</div>

</body>
</html>
