<?php

session_start();
if(!isset($_SESSION["user"])){
  header("location:../login.php");
}

echo '<p align=center style="font-family: Century Gothic; font-size:40pt;">Bienvenido</p>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <?php include("head.php");?>
        

<h1 class="text-info" ><strong><center>Sistema de Inventario Web</center></strong></h1>
    </head>
    <header class="container">
        <?php include("header.php");?>
    </header>
<!--
<body>
<div align="center">
<a href="agregar.php" class="button blue radius">
<span class="icon-plus"></span>Agregar</a>
<a href="eliminar.php" class="button yellow radius">
<span class="icon-cancel-circle"></span>Eliminar</a>
<a href="visualizar.php" class="button blue radius">
<span class="icon-eye"></span>Visualizar</a>
-->

</div>
<div>
</div>

<body>
	<div>
<div class="container" align="center">
		
			
			<div class="row">
				<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
				<input class="btn btn-primary" type="button" value="Nuevo registro" onclick="mostrar()"></input>
				<a href =../index.php class="btn btn-default"> Regresar</a>
				
				<!--<a href="nuevo.php" class="button" align="center">Nuevo Registro</a>-->			
			</div>
		</div>	
	</div>
	<br><br>

	



 <div class="container" id='oculto' style='display:none;'>
 	<br>
 		 <h1 class="text-info" align="left"><strong>INGRESE LOS DATOS</strong></h1>
			<div ><form class="form-horizontal" method="POST" action="Operacion_guardar.php" autocomplete="off">
				
				<div class="form-group">
				
					<label for="nombre" class="col-sm-2 control-label">Código de barra</label>
					<div class="col-sm-8 ">
						<input type="text" class="form-control" id="nombre" name="codigo" placeholder="Código" required>
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="marca" class="col-sm-2 control-label">Marca</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="name" name="marca" placeholder="Marca" required>
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">N° de Serie</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="telefono" name="serie" placeholder="Serie">
					</div>
				</div>
				<div class="form-group">
					<label for="modelo" class="col-sm-2 control-label">N° de Producto</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="name" name="producto" placeholder="Producto" required>
					</div>
				</div>
			
				
			<!--	<div class="form-group">
					<label for="hijos" class="col-sm-2 control-label">¿Tiene Hijos?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="hijos" name="hijos" value="1" checked> SI
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="hijos" name="hijos" value="0"> NO
						</label>
					</div>
				</div> -->

					<div class="form-group">
					<label for="HardDisk" class="col-sm-2 control-label">Disco Duro</label>
					<div class="col-sm-8">
						<select class="form-control" id="estado_civil" name="discoduro">
							<option value="null">---</option>
							
							<option name="discoduro">150GB</option>
							<option name="discoduro">250GB</option>
							<option name="discoduro">320GB</option>	
							<option name="discoduro">500GB</option>
							<option name="discoduro">1 TB</option>
							<option name="discoduro">2 TB</option>
						</select>
					</div>
				</div>
				

					<div class="form-group">
					<label for="Ram" class="col-sm-2 control-label">Memoria Ram</label>
					<div class="col-sm-8">
						<select class="form-control" id="estado_civil" name="ram">
							<option value="null">---</option>
							<option name="ram">1GB</option>
							<option name="ram">2GB</option>
							<option name="ram">4GB</option>
							<option name="ram">6GB</option>
							<option name="ram">8GB</option>
							<option name="ram">16GB</option>
						</select>
					</div>
				</div>
					<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Procesador</label>
					<div class="col-sm-8">
						<input type="Procesador" class="form-control" id="email" name="procesador" placeholder="Procesador" required>
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Velocidad </label>
					<div class="col-sm-8">
						<input type="vel" class="form-control" id="name" name="veloci" placeholder="Velocidad de procesador" required>
					</div>
				</div>

				
			<div class="form-group">
					<label for="OS" class="col-sm-2 control-label">Sistema Operativo</label>
					<div class="col-sm-8">
						<select class="form-control" id="estado_civil" name="sistema">
							<option value="null">---</option>
							<option >Windows xp</option>
							<option >Windows 7</option>
							<option >Windows 7pro</option>
							<option>Windows 8.1 pro</option>
							<option >Windows 8 pro</option>
							<option >Windows 10 Home</option>
							<option >Windows 10 pro</option>
						</select>
					</div>
				</div>				

				<div class="form-group">
					<label for="Bits" class="col-sm-2 control-label">Tipo de S.O</label>
					
					<div class="col-sm-8">
						<label class="checkbox-inline">
							<input type="checkbox"  name="arquitectura" value="32bits"> 32 Bits
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" name="arquitectura" value="64bits"> 64 Bits
						</label>
						
					
					</div>
				</div>

				<div class="form-group">
					<label for="modelo" class="col-sm-2 control-label">MAC</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="name" name="macadd" placeholder="MAC" required>
					</div>
				</div>

					<div class="form-group">
					<label for="modelo" class="col-sm-2 control-label">Fecha de compra</label>
					<div class="col-sm-8">
						<select class="form-control" id="name" name="fecha">
							<option value="null">---</option>
						
							<option >2005</option>
							<option>2006</option>
							<option >2007</option>
							<option >2008</option>
							<option >2009</option>
							<option>2010</option>
							<option >2011</option>
							<option >2012</option>
							<option >2013</option>
							<option>2014</option>
							<option >2015</option>
							<option >2016</option>
							<option >2017</option>
							<option>2018</option>
							
						</select>
					</div>
				</div>



<div class="form-group">
					<label for="Ram" class="col-sm-2 control-label">Departamento asignado</label>
					<div class="col-sm-8">
						<select class="form-control" id="estado_civil" name="departamento">
							<option value="null">---</option>
							<option ></option>
							<option >RECEPCIÓN</option>
							<option >RECURSOS HUMANOS</option>
							<option >VENTAS</option>
							<option >ALMACEN</option>
							<option >ENTRETENIMIENTO</option>
							<option >BODAS</option>
							<option >CONCIERGE</option>
							<option >CONTRALORIA</option>
							<option >LAVANDERIA</option>
							<option >COMPRAS</option>
							<option >CLUB PREFERRED</option>
							<option >MANTENIMIENTO</option>
							<option >AMA DE LLAVES</option>
							<option >SEGURIDAD</option>
							<option >MANTENIMIENTO</option>
							<option>ROOM SERVICE</option>
							<option>CHIEF CONCIERGE</option>
							<option>COCINA PRINCIPAL</option>
							<option>SPA</option>
							<option>COORDINACION AMBIENTAL</option>
							<option>TELEFONOS</option>
							<option>GERENCIA</option>
							<option>OF. RECEPCION</option>
							<option >SUPERVISORES DE MANTENIMIENTO</option>
							<option >OF. DE BARES</option>
							<option >ALMACEN DE MANTO.</option>


						</select>
					</div>
				</div>
<center>
<div>
<div  class="form-group">
					<label for="P" class="col-sm-2 control-label">Personal asignado</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="personal" placeholder="Personal" required>
					</div>
				</div>
				<div class="form-group">
					<label for="o" class="col-sm-2 control-label">Puesto</label>
					<div class="col-sm-8">
						<input type="text"" class="form-control" name="puesto" placeholder="Puesto" required>
					</div>
				</div>
</div></center>
				
<script type="text/javascript">
function mostrar(){
document.getElementById('oculto').style.display = 'block';}
</script>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="agregar.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			
			
</form>
</body>
</html>