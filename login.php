<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8">

    <title> Formulario de Acceso </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/login.css">

    </style>

</head>

<body>

    <div id="contenedor">
        <div id="central">
            <div id="login">
                <div class="titulo">
                    Bienvenido <br>a <br>
                    EColSi

                    <img id="imagenLogin" src="https://www.aliwell.mx/imagenes/registro/icono_sesion.png"></img>
                </div>

                <form method="POST" action="loginProceso.php" id="formulario">

                    <input type="text" name="txtUsu" placeholder="Usuario" required>

                    <input type="password" placeholder="Contraseña" name="txtPass" required>
                    <?php
                    if (isset($_GET["fallo"]) && $_GET["fallo"] == 'true') {
                        echo "<div style='color:white'>Usuario o contraseña invalido </div>";
                    } ?>
                    <button type="submit" title="Ingresar" name="Ingresar">Iniciar Sesion</button>
                </form>

            </div>
        </div>
    </div>

</body>

</html>