<?php
//print_r($_POST);
if (!isset($_POST['oculto'])) {
    header('Location: cliente.php');
}

include 'config/conexion.php';
$id2 = $_POST['id2'];
$NAME = $_POST['NAME'];
$LASTNAME = $_POST['LASTNAME'];
$ADDRESS = $_POST['ADDRESS'];
$PHONE = $_POST['PHONE'];

$sentencia = $conn->prepare("UPDATE client SET NAME = ?, LASTNAME = ?, ADDRESS = ?, 
												PHONE = ? WHERE IDCLIENT = ?;");
$resultado = $sentencia->execute([$NAME, $LASTNAME, $ADDRESS, $PHONE, $id2]);

if ($resultado === TRUE) {
    header('Location: cliente.php');
} else {
    echo "Error";
}
?>