<?php
session_start();
if (!isset($_SESSION['nombre'])) {
    header('Location: login.php');
} elseif (isset($_SESSION['nombre'])) {
    include 'config/conexion.php';
    $sentencia = $conn->query("SELECT * FROM client;");
    $client = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
} else {
    echo "Error en el sistema";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/stylecliente.css">
    <title>Cliente</title>

</head>

<body>
    <?php include("cabecera/header.php") ?>

    <h1>Bienvenido:
        <?php echo $_SESSION['nombre'] ?>
    </h1>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" name="busqueda" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" name="enviar" type="submit">Buscar</button>
    </form>
    <?php
		if(isset($_GET['enviar'])){
			$busqueda=$_GET['busqueda'];
			
			$consulta=$conn->query("SELECT * FROM client WHERE LASTNAME like '%$busqueda%'" );
			
			while($row=$consulta->fetch()){
				echo $row['LASTNAME'].'<br>';
                
			}
		}
		?>

    <div class="titulo">
        <h1>Lista de clientes</h1>
    </div>
    <div class="boton-c">
        <a href="formulariocliente.php" class="btnaniadir">Nuevo cliente</a>
    </div>

    <div class="container">


        <table class="content-table">

            <thead>

                <tr>

                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                    <th></th>
                    <th></th>
                </tr>
            <tbody>
                <?php
                foreach ($client as $dato) {
                ?>
                <tr>
                    <td>
                        <?php echo $dato->NAME; ?>
                    </td>
                    <td>
                        <?php echo $dato->LASTNAME; ?>
                    </td>
                    <td>
                        <?php echo $dato->ADDRESS; ?>
                    </td>
                    <td>
                        <?php echo $dato->PHONE; ?>
                    </td>

                    <td><a href="actualizar.php?id=<?php echo $dato->IDCLIENT; ?>">Editar</a></td>
                    <td><a href="delete.php?id=<?php echo $dato->IDCLIENT; ?>">Eliminar</a></td>
                </tr>
                <?php
                }
                ?>


            </tbody>
        </table>

    </div>





</body>

</html>