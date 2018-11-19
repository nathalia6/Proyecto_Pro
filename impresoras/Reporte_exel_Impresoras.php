<?php

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Reporte_Impresoras.xls"');
header('Cache-Control: max-age=0');
/*Este seria el codigo para word
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment; filename=Reporte_Laptops.doc");*/

$conn = mysqli_connect("localhost", "root", "", "inventario");

?>
<html>
<head>
	<title>Lista de Impresoras</title>
</head>
<body>
	<table width="100%" border="1" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="9" bgcolor="skyblue"><center><strong>Tabla Impresoras</strong></center></td>
		</tr>
		<tr>
			<td><strong>Codigo</strong></td>
			<td><strong>Marca</strong></td><td>
				<strong>Modelo</strong></td>
			<td><strong>Serie</strong></td>
			<td><strong>Producto</strong></td>
			<td><strong>Direccion IP</strong></td>
			<td><strong>Departamento</strong></td>
			<td><strong>Puesto</strong></td>
			<td><strong>Personal</strong></td>
		</tr>
<?php
 $sql = "SELECT * FROM impresoras ORDER BY Departamento ASC";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {   
    $Codigo=$row["Codigo"];
    $Marca=$row["Marca"];
    $Modelo=$row["Modelo"];
    $Serie=$row["Serie"];
    $Producto=$row["Producto"];
    $Direccionip=$row["DireccionIP"];
    $Departamento=$row["Departamento"];
    $Puesto=$row["Puesto"];
    $Personal=$row["Personal"];



?>
<tr>
			<td><?php echo $Codigo; ?></td>
			<td><?php echo $Marca; ?></td>
			<td><?php echo $Modelo; ?></td>
			<td><?php echo $Serie; ?></td>
			<td><?php echo $Producto; ?></td>
			<td><?php echo $Direccionip; ?></td>
			<td><?php echo $Departamento; ?></td>
			<td><?php echo $Puesto; ?></td>
			<td><?php echo $Personal; ?></td>
		</tr>

<?php
}
?>


	</table>

</body>
</html>