<?php
session_start();
if (!isset($_GET['id'])) {
	header('Location: index.php');
}




if (!isset($_SESSION['nombre'])) {
	header('Location: login.php');
} elseif (isset($_SESSION['nombre'])) {
	include 'config/conexion.php';
	$id = $_GET['id'];

	$sentencia = $conn->prepare("SELECT * FROM client WHERE IDCLIENT = ?;");
	$sentencia->execute([$id]);
	$persona = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($persona);
} else {
	echo "Error en el sistema";
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Editar Alumno</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/stylecliente.css">
	<link rel="stylesheet" href="CSS/styleformcliente.css">
</head>

<body>
	<?php include("cabecera/header.php") ?>
	<div class="">

		<h1>Edicion cliente</h1>
		<div class="col-md-3">

			<form action="update.php" method="POST">
				<center>
				<h1>Editar Cliente</h1>
					<label>Nombre:</label>
					<input type="text" class="form-control mb-3" name="NAME" value="<?php echo $persona->NAME; ?>"
						placeholder="Ingrese el nombre">
					<label>Apellido:</label>
					<input type="text" class="form-control mb-3" name="LASTNAME"
						value="<?php echo $persona->LASTNAME; ?>" placeholder="Ingrese el apellido">
					<label>Direccion:</label>
					<input type="text" class="form-control mb-3" name="ADDRESS" value="<?php echo $persona->ADDRESS; ?>"
						placeholder="Ingrese la dirrecion">
					<label>Telefono:</label>
					<input type="text" class="form-control mb-3" name="PHONE" value="<?php echo $persona->PHONE; ?>"
						placeholder="Ingrese el telefono">
					<tr>
						<input type="hidden" name="oculto">
						<input type="hidden" name="id2" value="<?php echo $persona->IDCLIENT; ?>">
						<td colspan="2"><input type="submit" class="btn-primary" value="Guardar"></td>
					</tr>
					<tr>
						<input type="hidden" name="oculto">
						<input type="hidden"value="cliente.php">
						<td colspan="2"><input type="submit" class="btn-secondary" value="Cancelar"></td>
					</tr>

					

				</center>
			</form>
		</div>
	</div>


</body>

</html>