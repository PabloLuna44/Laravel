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
            <th>Date</th>
            <th>Acciones</th>
        
        </tr>

    </thead>
    <tbody>
        @foreach($comentarios as $atributes)
        <tr>
            <td>{{$atributes->nombre}}</td>
            <td>{{$atributes->email}}</td>
            <td>{{$atributes->created_at}}</td>
            <td>
                <!-- Rutas con pase de parametros  -->
                <a href="{{route('comentario.show',$atributes)}}">Ver comentario</a> |
                <a href="{{route('comentario.edit',$atributes)}}">Editar</a> |
                <form action="{{ route('comentario.destroy',$atributes)}}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>