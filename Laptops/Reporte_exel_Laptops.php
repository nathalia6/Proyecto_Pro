<?php

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Reporte_Laptops.xls"');
header('Cache-Control: max-age=0');
/*Este seria el codigo para word
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment; filename=Reporte_Laptops.doc");*/

$conn = mysqli_connect("localhost", "root", "", "inventario");

?>
<html>
<head>
	<title>Lista de Laptops</title>
</head>
<body>
	<table width="100%" border="1" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="13" bgcolor="skyblue"><center><strong>Tabla Laptops</strong></center></td>
		</tr>
		<tr>
			<td><strong>Codigo</strong></td>
			<td><strong>Marca</strong></td>
			<td><strong>Serie</strong></td>
			<td><strong>Producto</strong></td>
			<td><strong>Ram</strong></td>
			<td><strong>Discoduro</strong></td>
			<td><strong>Sistema</strong></td>
			<td><strong>Arquitectura</strong></td>
			<td><strong>Procesador</strong></td>
			<td><strong>Mac-Add</strong></td>
			<td><strong>Departamento</strong></td>
			<td><strong>Puesto</strong></td>
			<td><strong>Personal</strong></td>
		</tr>
<?php
 $sql = "SELECT * FROM equipos ORDER BY Departamento ASC";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {   
    $Codigo=$row["Codigo"];
    $Marca=$row["Marca"];
    $Serie=$row["Serie"];
    $Producto=$row["Producto"];
    $Ram=$row["Ram"];
    $Discoduro=$row["Discoduro"];
    $Sistema=$row["Sistema"];
    $Arquitectura=$row["Arquitectura"];
    $Procesador=$row["Procesador"];
    $Macadd=$row["Macadd"];
    $Departamento=$row["Departamento"];
    $Puesto=$row["Puesto"];
    $Personal=$row["Personal"];



?>
<tr>
			<td><?php echo $Codigo; ?></td>
			<td><?php echo $Marca; ?></td>
			<td><?php echo $Serie; ?></td>
			<td><?php echo $Producto; ?></td>
			<td><?php echo $Ram; ?></td>
			<td><?php echo $Discoduro; ?></td>
			<td><?php echo $Sistema; ?></td>
			<td><?php echo $Arquitectura; ?></td>
			<td><?php echo $Procesador; ?></td>
			<td><?php echo $Macadd; ?></td>
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