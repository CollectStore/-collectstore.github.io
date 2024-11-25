<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$bdname = "colectstore";

$connect = new mysqli($servidor, $usuario, $password, $bdname); 

if ($connect->connect_error){

	echo "error de conexion";
}
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$direc = $_POST['direc'];
$card_number = $_POST['card_number'];
$exp_date = $_POST['exp_date'];
$cvv = $_POST['cvv'];

$sql = "INSERT INTO pago (nombre, email, direc, card_number, exp_date, cvv) VALUES ('$nombre', '$email', '$direc', '$card_number', '$exp_date', '$cvv')";

if ($connect->Query($sql) === TRUE){

	echo "REGISTRO VALIDO";

}else{

	echo "REGISTRO INVALIDO";
	
}

$connect->close();
?>