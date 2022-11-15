<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/stylecliente.css">
    <link rel="stylesheet" href="CSS/styleformcliente.css">
    <title>Cliente</title>

</head>

<body>
    <?php include("cabecera/header.php") ?>
    <div class="">

        <h1>Registro nuevo cliente</h1>
        <div class="col-md-3">

            <form action="insertarcliente.php" method="POST">
                <center>
                    <h1>Registrar datos</h1>
                    <label>Nombre:</label>
                    <input type="text" class="form-control mb-3" name="NAME" placeholder="Ingrese el nombre">
                    <label>Apellido:</label>
                    <input type="text" class="form-control mb-3" name="LASTNAME" placeholder="Ingrese el apellido">
                    <label>Direccion:</label>
                    <input type="text" class="form-control mb-3" name="ADDRESS" placeholder="Ingrese la dirrecion">
                    <label>Telefono:</label>
                    <input type="text" class="form-control mb-3" name="PHONE" placeholder="Ingrese el telefono">
                    <input type="hidden" name="oculto" value="1">
                    <input type="submit" class="btn-primary" value="Guardar">
                    <a href="cliente.php" class="btn-secondary">Cancelar</a>
                </center>
            </form>
        </div>
    </div>
</body>

</html>