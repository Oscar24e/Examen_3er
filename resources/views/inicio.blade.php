<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="tabla table-striped table-hover">
        <thead>
            <th>ID</th>
            <th>PELICULA</th>
        </thead>
        <tbody>
            @foreach($pelicula as $pelicula)
            <tr>
                <td>{{$pelicula->id}}</td>
                <td>{{$pelicula->nombre_pelicula}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    


</body>
</html>