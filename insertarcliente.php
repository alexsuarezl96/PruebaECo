<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include 'config/conexion.php';

    $NAME = $_POST['NAME'];
    $LASTNAME = $_POST['LASTNAME'];
    $ADDRESS = $_POST['ADDRESS'];
    $PHONE = $_POST['PHONE'];

	$sentencia = $conn->prepare("INSERT INTO client(IDCLIENT,NAME,LASTNAME,ADDRESS,PHONE) VALUES (?,?,?,?,?);");
	$resultado = $sentencia->execute([$IDCLIENT,$NAME,$LASTNAME,$ADDRESS,$PHONE]);

	if ($resultado === TRUE) {
		
		header('Location: cliente.php');
	}else{
		echo "Error";
	}
?>