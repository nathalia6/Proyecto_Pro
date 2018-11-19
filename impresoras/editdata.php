<?php
/**
 for display full info. and edit data
 */
// start again
$con=mysqli_connect('localhost','root','','inventario');  // this one in error
if(isset($_REQUEST['id'])){
    $id=intval($_REQUEST['id']);
    $sql="select * from impresoras WHERE id=$id";
    $run_sql=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($run_sql)){
        $per_id=$row[0];
        $per_Codigo=$row[1];
        $per_Marca=$row[2];
        $per_Modelo=$row[3];
        $per_Serie=$row[4];
        $per_Producto=$row[5];
        $per_DireccionIP=$row[6];
        $per_Departamento=$row[7];
        $per_Puesto=$row[8];
        $per_Personal=$row[9];
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
                            <label class="col-sm-4 control-label" for="txtdepartamento">Modelo</label>
                            <div class="col-sm-6">
                                <input type="text" REQUIRED class="form-control" id="txtmodelo" name="txtmodelo" value="<?php echo $per_Modelo;?>">
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
                            <label class="col-sm-4 control-label" for="txtproducto">Direccion IP</label>
                            <div class="col-sm-6">
                                <input type="text" REQUIRED class="form-control" id="txtdireccionip" name="txtdireccionip" value="<?php echo $per_DireccionIP;?>">
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
                <a href="Visualizar_Impresoras.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
                <button type="submit" class="btn btn-primary" name="btnEdit">Guardar</button>
            </div>
        </div>
    </form>
<?php
}//end if ?>





