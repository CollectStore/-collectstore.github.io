<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$bdname = "colectstore";

$connect = new mysqli($servidor, $usuario, $password, $bdname); 

if ($connect->connect_error){

	echo "error de conexion";
}
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

if ($connect->Query($sql) === TRUE){

	echo "REGISTRO VALIDO";

}else{

	echo "REGISTRO INVALIDO";
	
}

$connect->close();
?>