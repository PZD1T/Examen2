<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Listado de Álbums</title>
</head>
<body>
    
<div class="container mt-4">
    <h1 class="text-center">Tabla de Álbums</h1>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre del Álbum</th>
                <th>Fecha de Lanzamiento</th>
                <th>Artista</th>
                <th>Género</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se mostrarán los datos de la tabla albums -->
            @foreach($albums as $album)
            <tr>
                <td>{{ $album->id }}</td>
                <td>{{ $album->album_name }}</td>
                <td>{{ $album->date_released }}</td>
                <td>{{ $album->artist->artist_name }}</td>
                <td>{{ $album->genre->genre_name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
