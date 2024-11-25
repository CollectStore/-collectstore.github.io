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
$rating = $_POST['rating'];
$review = $_POST['review'];

$sql = "INSERT INTO rese (name, rating, review) VALUES ('$name', '$rating', '$review')";

if ($connect->Query($sql) === TRUE){

	echo "REGISTRO VALIDO";

}else{

	echo "REGISTRO INVALIDO";
	
}

$connect->close();
?>
