<!--Aqui esta la conexion de las variables con la base de datos, es para que al llenar los datos en el foemulario se guarden en base de datos-->
<?php 
$con=mysqli_connect('localhost','root','','inventario')
    or die("connection failed".mysqli_errno());
/*este es para las laptops*/
$Codigo= $_POST['codigo'];
$Marca= $_POST['marca'];
$Serie= $_POST['serie'];
$Producto= $_POST['producto'];
$Ram= $_POST['ram'];
$Discoduro= $_POST['discoduro'];
$Sistema= $_POST['sistema'];
$Arquitectura= $_POST['arquitectura'];
$Procesador= $_POST['procesador'];
$Macadd= $_POST['macadd'];
$Departamento= $_POST['departamento'];
$Puesto= $_POST['puesto'];
$Personal= $_POST['personal'];

$query="INSERT INTO equipos(Codigo,Marca,Serie,Producto,Ram,Discoduro,Sistema,Arquitectura,Procesador,Macadd,Departamento,Puesto,Personal,Fecha,Veloci) VALUES('$Codigo','$Marca','$Serie','$Producto','$Ram','$Discoduro','$Sistema','$Arquitectura','$Procesador','$Macadd','$Departamento','$Puesto','$Personal')";
$resultado= $con->query($query);

if ($resultado) {
	/*Lo que hace esto es que al terminar de llenar te redirecciona a la tabla de la base*/
	header("Location: Visualizar_laptops.php");
}
else{
echo "insercion no exitosa";
}
?>