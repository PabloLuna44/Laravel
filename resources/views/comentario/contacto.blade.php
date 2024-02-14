<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload"
        href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"
        crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/style.css">

    <title>Presentacion</title>
</head>

<body>




    <header class="header">
        <div class="container">
            <div class="nav-bar">
                <a href="index.html">
                    <h1>Presentación</h1>
                </a>
                <nav class="nav">
                    <ul>
                        <li><a class="enlaces" href="index.php">Inicio</a></li>
                        <li><a class="enlaces" href="form.php">Formulario</a></li>
                    </ul>
                </nav>
            </div>
        </div><!-- container -->
    </header>
    <main>
        <h2 class="text-center">Contacto</h2>


        <form method="POST" class="form" action="/comentario">
        @csrf

            <fieldset>
                <legend>Informacion del usuario</legend>

                <div class="field">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" >
                </div>

                <p>Genero</p>

                <div class="field">
                    <label for="masculino">Masculino
                        <input type="radio" name="genero" id="genero" value="Masculino">
                    </label>
                </div>

                <div class="field">

                    <label for="femenino">Femenino
                        <input type="radio" name="genero" id="genero" value="Femenino">
                    </label>
                </div>


                <div class="field">
                    <label for="ciudad">Ciudad</label>
                    <select name="ciudad" id="ciudad">

                        <option selected value="">-----Selecciona tu estado-----</option>
                        <option value="zapopan">Zapopan</option>
                        <option value="guadalajara">Guadalajara</option>
                        <option value="tlaquepaque">Tlaquepaque</option>
                        <option value="Tonala">Tonala</option>
                    </select>

                </div>

            </fieldset>

            <fieldset>

                <legend>Cuenta</legend>

                <div class="field">
                    <label for="emial">Email</label>
                    <input type="email" name="email" id="email" >
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" >
                </div>

            </fieldset>

            <fieldset>
                <legend>Comentario</legend>

                <div class="field">
                    <label for="comentario">Comentario</label>
                    <textarea name="comentario" id="" cols="30" rows="10"></textarea>
                </div>


                <div class="field">
                    <label for="interes">Me interesa contactarte
                        <input type="checkbox" name="interesado" id="interesado">
                    </label>

                </div>




            </fieldset>



            <input type="submit" value="Enviar">
        </form>


        

    </main>

    <footer>

        <div class="container">
            <div class="nav-bar footer">
                <a href="index.html">
                    <h1>Presentación</h1>
                </a>
                <nav class="nav">
                    <ul>
                        <li><a class="enlaces" href="index.php">Inicio</a></li>
                        <li><a class="enlaces" href="form.php">Formulario</a></li>
                    </ul>
                </nav>

                <div class="contacto">
                    <h3 class="title-contact">Contactame</h3>
                    <a class="email" href="guzmanlunajuanpablo@gmail.com">guzmanlunajuanpablo@gmail.com </a>
                </div>

            </div><!-- nav-bar -->
        </div><!-- container -->
    </footer>

</body>

</html>