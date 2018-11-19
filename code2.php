<?php
$mysqli= new mysqli("localhost","root","","inventario");
if (mysqli_connect_errno()) {
	echo 'conexion fallida : ', mysqli_connect_error();
	exit();
	# code...
}

?>