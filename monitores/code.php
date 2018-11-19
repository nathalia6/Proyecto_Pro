<?php

require '../code2.php';

$sql = "SELECT Codigo FROM monitores";
$resultado = $mysqli->query($sql);

while ($row = $resultado->fetch_assoc()) {

?>

<img src="../barcode.php?text=<?php echo $row['Codigo']; ?>&size=50&orientation=horizontal&codetype=Code39&print=true&sizefactor=2"/>

<br/>

<?php }

?>
<button class="btn btn-default"><a style="text-decoration:none;" href="visualizar_monitores">Regresar</a></button> 
<!--<a href="barcode.php?text=0123456789&size=50&orientation=horizontal&codetype=Code39&print=true&sizefactor=2">Generar</a>