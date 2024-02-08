<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>information</title>
</head>
<body>


<a href="/contacto">Contacto</a>

<h1>Informacion</h1>

@if($tipo ==='alumno')
<h2>Alumnos</h2>
<h4>Informacion de los alumnos</h4>
@elseif($tipo=='empresa')
<h2>Empresa</h2>
<h4>Informacion de la empresa</h4>
@elseif($tipo=='visitante')
<h2>visitante</h2>
<h4>Informacion de la empresa</h4>
@endif








    
</body>
</html>