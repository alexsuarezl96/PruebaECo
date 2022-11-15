<?php  
	if (!isset($_GET['id'])) {
		exit();
	}

	$codigo = $_GET['id'];
	include 'config/conexion.php';
	$sentencia = $conn->prepare("DELETE FROM client WHERE IDCLIENT = ?;");
	$resultado = $sentencia->execute([$codigo]);

	if ($resultado === TRUE) {
		header('Location: cliente.php');
	}else{
		echo "Error";
	}

?>