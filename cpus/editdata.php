<?php
/**
 for display full info. and edit data
 */
// start again
$con=mysqli_connect('localhost','root','','inventario');  // this one in error
if(isset($_REQUEST['id'])){
    $id=intval($_REQUEST['id']);
    $sql="select * from cpus WHERE id=$id";
    $run_sql=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($run_sql)){
        $per_id=$row[0];
        $per_Codigo=$row[1];
        $per_Marca=$row[2];
        $per_Serie=$row[3];
        $per_Producto=$row[4];
        $per_Ram=$row[5];
        $per_Discoduro=$row[6];
        $per_Sistema=$row[7];
        $per_Arquitectura=$row[8];
        $per_Procesador=$row[9];
        $per_Macadd=$row[10];
        $per_Departamento=$row[11];
        $per_Puesto=$row[12];
        $per_Personal=$row[13];
        $per_Fecha=$row[14];
        $per_Veloci=$row[15];
    }//end while
    //var_dump($run_sql);
    ?>
    <form class="form-horizontal" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h1 class="modal-title"><center>Editar Información  <span class="icon-pencil2"></center></h1>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtid">ID</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtid" name="txtid" value="<?php echo $per_id;?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtcodigo">Codigo</label>
                            <div class="col-sm-6">
                                <input type="text" REQUIRED class="form-control" id="txtcodigo" name="txtcodigo" value="<?php echo $per_Codigo;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtmarca">Marca</label>
                            <div class="col-sm-6">
                                <input type="text" REQUIRED class="form-control" id="txtmarca" name="txtmarca" value="<?php echo $per_Marca;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtserie">Serie</label>
                            <div class="col-sm-6">
                                <input type="text" REQUIRED class="form-control" id="txtserie" name="txtserie" value="<?php echo $per_Serie;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtproducto">Producto</label>
                            <div class="col-sm-6">
                                <input type="text" REQUIRED class="form-control" id="txtproducto" name="txtproducto" value="<?php echo $per_Producto;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtram">Ram</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtram" name="txtram" value="<?php echo $per_Ram;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtdiscoduro">Discoduro</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtdiscoduro" name="txtdiscoduro" value="<?php echo $per_Discoduro;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtsistema">Sistema</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtsistema" name="txtsistema" value="<?php echo $per_Sistema;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtarquitectura">Arquitectura</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtarquitectura" name="txtarquitectura" value="<?php echo $per_Arquitectura;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtprocesador">Procesador</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtprocesador" name="txtprocesador" value="<?php echo $per_Procesador;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtmacadd">Mac-Add</label>
                            <div class="col-sm-6">
                                <input type="text" REQUIRED class="form-control" id="txtmacadd" name="txtmacadd" value="<?php echo $per_Macadd;?>">
                            </div>
                        </div>
                         <div class="form-group">
                               <label class="col-sm-4 control-label" for="txtfecha">Fecha</label>
                            <div class="col-sm-6">
                                <input type="text" REQUIRED class="form-control" id="txtfecha" name="txtfecha" value="<?php echo $per_Fecha;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtdepartamento">Departamento</label>
                            <div class="col-sm-6">
                                <input type="text" REQUIRED class="form-control" id="txtdepartamento" name="txtdepartamento" value="<?php echo $per_Departamento;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtpuesto">Puesto</label>
                            <div class="col-sm-6">
                                <input type="text" REQUIRED class="form-control" id="txtpuesto" name="txtpuesto" value="<?php echo $per_Puesto;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtpersonal">Personal</label>
                            <div class="col-sm-6">
                                <input type="text" REQUIRED class="form-control" id="txtpersonal" name="txtpersonal" value="<?php echo $per_Personal;?>">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
           <div class="modal-footer">
                <a href="Visualizar_cpu.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
                <button type="submit" class="btn btn-primary" name="btnEdit">Guardar</button>
            </div>
        </div>
    </form>
<?php
}//end if ?>





