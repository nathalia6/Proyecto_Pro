<!DOCTYPE html>
<html>
<head>
	<title>Guardar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,cmaximum=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	<!--Creando el dormulario con sus nombres-->
	<center>
		<form action="Operacion_guardar.php" method="POST" class="form-horizontal">
			<div class="modal-content">
			<div class="modal-header">
                <h1 class="modal-title"><center>Agregar Datos<span class="icon-pencil2"></center></h1>
            </div>
            <div class="modal-body">
            <form class="form-horizontal">
            <div class="box-body">

            <div class="form-group">
             <label class="col-sm-4 control-label" for="txtid">Codigo</label>
              <div class="col-sm-6">
              <input type="text" onkeyup="this.value=this.value.toUpperCase();" REQUIRED name="codigo" placeholder="Código de barras.." value=""/>
                            </div>
                        </div>

              <div class="form-group">
             <label class="col-sm-4 control-label" for="txtid">Marca</label>
              <div class="col-sm-6">
             <input type="text" REQUIRED name="marca" placeholder="Marca.." value=""/>
                            </div>
                        </div>
              <div class="form-group">
             <label class="col-sm-4 control-label" for="txtid">Serie</label>
              <div class="col-sm-6">
             <input type="text" REQUIRED name="serie" placeholder="Serie.." value=""/>
                            </div>
                        </div>
             <div class="form-group">
             <label class="col-sm-4 control-label" for="txtid">Producto</label>
              <div class="col-sm-6">
             <input type="text" REQUIRED name="producto" placeholder="Producto.." value=""/>
                            </div>
                        </div>
               <div class="form-group">
             <label class="col-sm-4 control-label" for="txtid">Ram</label>
              <div class="col-sm-6">
            <input type="text" name="ram" placeholder="Ram.." value=""/>
                            </div>
                        </div>
             <div class="form-group">
             <label class="col-sm-4 control-label" for="txtid">Discoduro</label>
              <div class="col-sm-6">
            <input type="text" name="discoduro" placeholder="Discoduro.." value=""/>
                            </div>
                        </div>
              <div class="form-group">
             <label class="col-sm-4 control-label" for="txtid">Sistema</label>
              <div class="col-sm-6">
            <input type="text" name="sistema" placeholder="SistemaOperativo.." value=""/>
                            </div>
                        </div>
               <div class="form-group">
             <label class="col-sm-4 control-label" for="txtid">Arquitectura</label>
              <div class="col-sm-6">
            <input type="text" name="arquitectura" placeholder="Arquitectura.." value=""/>
                            </div>
                        </div>

               <div class="form-group">
             <label class="col-sm-4 control-label" for="txtid">Procesador</label>
              <div class="col-sm-6">
            <input type="text" name="procesador" placeholder="Procesador.." value=""/>
                            </div>
                        </div>

              <div class="form-group">
             <label class="col-sm-4 control-label" for="txtid">Mac-Add</label>
              <div class="col-sm-6">
            <input type="text" REQUIRED name="macadd" placeholder="Mac.Add.." value=""/>
                            </div>
                        </div>
             <div class="form-group">
             <label class="col-sm-4 control-label" for="txtid">Departamenrto</label>
              <div class="col-sm-6">
            
			<input type="text" REQUIRED name="departamento" placeholder="Departamento.." value=""/>
                            </div>
                        </div>
             <div class="form-group">
             <label class="col-sm-4 control-label" for="txtid">Puesto</label>
              <div class="col-sm-6">
            
			<input type="text" REQUIRED name="puesto" placeholder="Puesto.." value=""/>
                            </div>
                        </div>
             <div class="form-group">
             <label class="col-sm-4 control-label" for="txtid">Personal</label>
              <div class="col-sm-6">
            
			<input type="text" REQUIRED name="personal" placeholder="Personal encargado.." value=""/>
                            </div>
                        </div>
          <div class="modal-footer">
                <a href="index"><button type="button" class="btn btn-danger">Cancelar</button></a>
                <button type="submit" class="btn btn-primary" name="btnGuard">Guardar</button>
            </div>
         


          </div>
			</form>
          </div>
			</div>
		</form>
	</center>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
