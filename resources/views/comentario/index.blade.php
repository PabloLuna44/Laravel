<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Listado de comentarios</h1>

<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
        
        </tr>

    </thead>
    <tbody>
        @foreach($comentarios as $atributes)
        <tr>
            <td>{{$atributes->nombre}}</td>
            <td>{{$atributes->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>