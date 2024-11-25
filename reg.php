<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$bdname = "colectstore";

$connect = new mysqli($servidor, $usuario, $password, $bdname); 

if ($connect->connect_error){

	echo "error de conexion";
}
$user = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO reg (user, email, password) VALUES ('$user', '$email', '$password')";

if ($connect->Query($sql) === TRUE){

	echo "REGISTRO VALIDO";

}else{

	echo "REGISTRO INVALIDO";
	
}

$connect->close();
?>